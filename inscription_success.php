<?php
include 'functions.php';

// Vérifier si le paramètre "success" est passé en URL
if (isset($_GET['success'])) {
    $success = $_GET['success'];

    // Vérifier la valeur du paramètre "success"
    if ($success === "connexion_reussie") {
        $message = "Connexion réussie !";
    } elseif ($success === "inscription_reussie") {
        $message = "Inscription réussie !";
    } else {
        $message = "Opération réussie !";
    }
} else {
    $message = "Opération réussie !";
}

// Configuration de la page
setup("Inscription réussie"); // Utilisez le titre "Inscription réussie" pour l'inscription
pagenavbar();
pageheader("Inscription réussie"); // Utilisez le titre "Inscription réussie" pour l'inscription

// Afficher le message correspondant
echo '<div class="alert alert-success" role="alert">' . $message . '</div>';

pagefooter();

?>
