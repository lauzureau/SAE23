<?php
require_once 'session.php';
include 'functions.php';

// Vérifier si l'utilisateur est connecté
if (!checkLoggedIn()) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location: connexion.php');
    exit;
}
?>
