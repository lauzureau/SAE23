<?php
include "functions.php";

setup("SAE23");

echo ' <div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

?>

<?php
// Simulons un utilisateur connecté avec un groupe assigné
$userGroup = 'admin'; // Remplacez cette valeur par le groupe de l'utilisateur connecté

// Définir les autorisations pour chaque groupe d'utilisateurs
$permissions = [
    'admin' => ['add', 'delete', 'view'],
    'salaries' => ['add', 'view'],
    'managers' => ['add', 'delete', 'view'],
    'direction' => ['view'],
    'perso' => ['add', 'delete', 'view']
];

// Répertoire de base
$repertoire = './data/';

// Vérifier si un fichier a été soumis pour ajout
if (isset($_FILES['fichier']) && in_array('add', $permissions[$userGroup])) {
    $fichier = $_FILES['fichier'];

    // Vérifier s'il n'y a pas eu d'erreur lors du téléchargement
    if ($fichier['error'] === UPLOAD_ERR_OK) {
        $nomFichier = basename($fichier['name']);
        $cheminFichier = $repertoire . $nomFichier;

        // Déplacer le fichier téléchargé vers le répertoire de destination
        if (move_uploaded_file($fichier['tmp_name'], $cheminFichier)) {
            echo '<p>Fichier téléchargé avec succès : ' . $nomFichier . '</p>';
        } else {
            echo '<p>Erreur lors du téléchargement du fichier.</p>';
        }
    } else {
        echo '<p>Une erreur est survenue lors du téléchargement du fichier.</p>';
    }
}

// Vérifier si un fichier a été soumis pour suppression
if (isset($_POST['supprimer']) && in_array('delete', $permissions[$userGroup])) {
    $fichierASupprimer = $_POST['supprimer'];
    $cheminFichierASupprimer = $repertoire . $fichierASupprimer;

    if (file_exists($cheminFichierASupprimer)) {
        if (unlink($cheminFichierASupprimer)) {
            echo '<p>Fichier supprimé avec succès : ' . $fichierASupprimer . '</p>';
        } else {
            echo '<p>Erreur lors de la suppression du fichier.</p>';
        }
    } else {
        echo '<p>Le fichier à supprimer n\'existe pas.</p>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestionnaire de fichiers</title>
</head>
<body>
    <h1>Gestionnaire de fichiers</h1>

    <?php if (in_array('add', $permissions[$userGroup])) : ?>
        <h2>Télécharger un fichier</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="fichier" required>
            <input type="submit" value="Télécharger">
        </form>
    <?php endif; ?>

    <h2>Liste des fichiers</h2>
    <ul>
        <?php
        // Lire le contenu du répertoire
        $fichiers = scandir($repertoire);

        // Afficher les fichiers
        foreach ($fichiers as $fichier) {
            if ($fichier !== '.' && $fichier !== '..') {
                $cheminFichier = $repertoire . $fichier;
                $estSupprimable = in_array('delete', $permissions[$userGroup]) && is_file($cheminFichier);
                $estVisualisable = in_array('view', $permissions[$userGroup]);
                echo '<li>' . $fichier;
                if ($estSupprimable) {
                    echo ' <form action="" method="POST" style="display:inline-block;">
                                <input type="hidden" name="supprimer" value="' . $fichier . '">
                                <button type="submit">Supprimer</button>
                            </form>';
                }
                if ($estVisualisable) {
                    echo ' <a href="' . $cheminFichier . '">Voir</a>';
                }
                echo '</li>';
            }
        }
        ?>
    </ul>
</body>
</html>


<?php

pagefooter();
?>
