<?php
include "functions.php";

setup("SAE23");

echo '<div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

?>

<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// Obtenir les informations de l'utilisateur connecté
$user = $_SESSION['user'];

// Définir les permissions par groupe d'utilisateurs
$permissions = [
    'admin' => ['add', 'delete', 'view'],
    'salaries' => ['add', 'view'],
    'managers' => ['add', 'delete', 'view'],
    'direction' => ['view'],
    'perso' => ['add', 'delete', 'view']
];

// Vérifier si l'utilisateur a la permission d'accéder au gestionnaire de fichiers
if (!hasPermission($user, $permissions, 'view')) {
    header('Location: account.php'); // Rediriger vers une page appropriée si l'accès est refusé
    exit;
}

// Fonction pour vérifier si l'utilisateur a une certaine permission
function hasPermission($user, $permissions, $permission) {
    foreach ($user['groups'] as $group) {
        if (isset($permissions[$group]) && in_array($permission, $permissions[$group])) {
            return true;
        }
    }
    return false;
}

// Chemin vers le dossier de stockage des fichiers
$uploadDir = 'data/';

// Obtenir la liste des fichiers déjà uploadés
$uploadedFiles = [];
if (is_dir($uploadDir)) {
    $uploadedFiles = array_diff(scandir($uploadDir), ['.', '..']);
}

// Traitement de l'ajout de fichier
if (hasPermission($user, $permissions, 'add') && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];

    $fileDestination = $uploadDir . $fileName;

    // Déplacer le fichier téléchargé vers le dossier de destination
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
        // Redirection vers la page actuelle pour afficher la liste mise à jour des fichiers
        header('Location: file_cloud.php');
        exit;
    }
}

// Suppression d'un fichier
if (hasPermission($user, $permissions, 'delete') && isset($_POST['delete'])) {
    $fileToDelete = $_POST['delete'];
    $filePath = $uploadDir . $fileToDelete;

    if (file_exists($filePath)) {
        unlink($filePath); // Supprimer le fichier du serveur

        // Redirection vers la page actuelle pour afficher la liste mise à jour des fichiers
        header('Location: file_cloud.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestionnaire de fichiers</title>
</head>
<body>
    <div class="mt-4 p-5 bg-dark text-warning rounded">
    <h1>Gestionnaire de fichiers</h1>

    <?php if (hasPermission($user, $permissions, 'add')) : ?>
        <form method="POST" enctype="multipart/form-data">
            <label for="file">Sélectionner un fichier :</label>
            <input type="file" name="file" id="file" required>
            <button type="submit">Ajouter</button>
        </form>
    <?php endif; ?>

    <?php if (!empty($uploadedFiles)) : ?>
        <h2>Liste des fichiers :</h2>
        <ul>
            <?php foreach ($uploadedFiles as $file) : ?>
                <li>
                    <a href="<?php echo $uploadDir . $file; ?>"><?php echo $file; ?></a>
                    <?php if (hasPermission($user, $permissions, 'delete')) : ?>
                        <form method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce fichier ?');">
                            <input type="hidden" name="delete" value="<?php echo $file; ?>">
                            <button type="submit">Supprimer</button>
                        </form>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="account.php">Retourner à Mon compte</a>
    </div>
</body>
</html>

<?php
pagefooter();
?>
