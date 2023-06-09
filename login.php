<?php
include "functions.php";

setup("SAE23");

echo ' <div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

?>

<?php
session_start();

// Fonction pour authentifier l'utilisateur
function authenticateUser($username, $password) {
    // Charger les données des utilisateurs depuis le fichier JSON
    $usersData = json_decode(file_get_contents('./js/comptes.json'), true);

    foreach ($usersData as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return $user;
        }
    }

    return null;
}

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user'])) {
    // L'utilisateur est déjà connecté, vous pouvez effectuer des actions supplémentaires ou le rediriger vers une page spécifique
    header('Location: account.php');
    exit;
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authentifier l'utilisateur
    $user = authenticateUser($username, $password);

    if ($user) {
        // Authentification réussie, stocker les informations de l'utilisateur dans la session
        $_SESSION['user'] = $user;

        // Rediriger vers le tableau de bord ou la page souhaitée
        header('Location: account.php');
        exit;
    } else {
        // Authentification échouée, afficher un message d'erreur
        $errorMessage = 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <div class="mt-4 p-5 bg-dark text-warning rounded">
    <h1>Connexion</h1>

    <?php if (isset($errorMessage)) : ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Connexion">
    </form>
    </div>
</body>
</html>

<?php
pagefooter();
?>
