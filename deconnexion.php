<?php
// Inclure le fichier session.php pour gérer la session
include 'session.php';

// Détruire la session existante
session_destroy();

// Redirection vers la page de connexion
header('Location: connexion.php');
exit;
?>
