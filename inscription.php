<?php
include 'functions.php';

// Appeler la fonction setup() pour configurer la page
setup("Inscription");

// Appeler la fonction pagenavbar() pour afficher la barre de navigation
pagenavbar();

// Vérification du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  
    // Vérifier si les champs sont vides
    if (empty($username) || empty($password) || empty($email)) {
        $error = "Veuillez remplir tous les champs du formulaire.";
    } else {
        // Traitement de l'inscription (ajoutez votre logique ici)
        // ...
        // Rediriger l'utilisateur vers une page de succès
        header("Location: inscription_success.php?success=inscription");
        exit;
    }
}

// Afficher le formulaire d'inscription avec éventuel message d'erreur
displayRegistrationFormWithError();

// Appeler la fonction pagefooter() pour afficher le pied de page
pagefooter();
?>
