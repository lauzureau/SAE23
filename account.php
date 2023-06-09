<?php
include "functions.php";

setup("SAE23");

echo ' <div class="container mt-3">';

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
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mon compte</title>
</head>
<body>
    <div class="mt-4 p-5 bg-dark text-warning rounded">
    <h1>Mon compte</h1>

    <h2>Informations personnelles :</h2>
    <p>Username: <?php echo $user['username']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Groupes: <?php echo implode(', ', $user['groups']); ?></p>

    <h2>Liens :</h2>
    <ul>
        <li><a href="file_cloud.php">Cloud</a></li>
        <li><a href="annuaire.php">Annuaire</a></li>
        <li><a href="partners.php">Gestionnaire des Partenaires</a></li>
        <li><a href="achat.php">Acheter des NFT</a></li>
    </ul>

    <a href="logout.php">Déconnexion</a>
    </div>
</body>
</html>

<?php

pagefooter();
?>