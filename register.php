<?php
include "functions.php";

setup("SAE23");

echo '<div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

?>

<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté, le rediriger vers la page d'accueil
if (isset($_SESSION['user'])) {
    header('Location: account.php');
    exit;
}

// Variables pour afficher les messages d'erreur et de succès
$errorMsg = '';
$successMsg = '';

// Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_POST['email'];

    // Validation des données
    if (empty($username) || empty($password) || empty($confirmPassword) || empty($email)) {
        $errorMsg = 'Veuillez remplir tous les champs.';
    } elseif ($password !== $confirmPassword) {
        $errorMsg = 'Les mots de passe ne correspondent pas.';
    } else {
        // Enregistrer l'utilisateur dans le fichier users.json

        // Lire les utilisateurs existants depuis le fichier users.json
        $usersData = file_get_contents('users.json');
        $users = json_decode($usersData, true);

        // Vérifier si l'utilisateur existe déjà
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $errorMsg = 'Ce nom d\'utilisateur existe déjà. Veuillez en choisir un autre.';
                break;
            }
        }

        // Si l'utilisateur n'existe pas, procéder à l'inscription
        if (empty($errorMsg)) {
            // Générer un nouvel identifiant pour l'utilisateur
            $newUserID = uniqid();

            // Créer un tableau contenant les informations de l'utilisateur
            $newUser = [
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'groups' => ['user']
            ];

            // Ajouter le nouvel utilisateur au tableau des utilisateurs
            $users[$newUserID] = $newUser;

            // Enregistrer le tableau mis à jour dans le fichier users.json
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

            // Afficher le message de succès
            $successMsg = 'Inscription réussie. Vous pouvez maintenant vous connecter.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <div class="mt-4 p-5 bg-dark text-warning rounded">
    <h1>Inscription</h1>

    <?php if (!empty($errorMsg)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($successMsg)) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $successMsg; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirmer le mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>

    </div>
</body>
</html>

<?php
pagefooter();
?>
