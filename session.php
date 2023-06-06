<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location: connexion.php');
    exit;
}

// Afficher le nom d'utilisateur dans la session
$username = $_SESSION['username'];
echo "Bonjour, $username ! Vous êtes connecté.";
?>
