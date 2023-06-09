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
        // Récupérer les données existantes du fichier comptes.json
        $comptes = json_decode(file_get_contents('./js/comptes.json'), true);

        // Ajouter les nouvelles données du compte à $comptes
        $nouveauCompte = [
            'username' => $username,
            'password' => $password,
            'email' => $email
        ];

        $comptes[] = $nouveauCompte;

        // Convertir le tableau $comptes en format JSON
        $jsonComptes = json_encode($comptes, JSON_PRETTY_PRINT);

        // Écrire le contenu JSON dans le fichier comptes.json
        file_put_contents('./js/comptes.json', $jsonComptes);

        // Rediriger l'utilisateur vers une page de succès avec le paramètre correspondant
        header("Location: inscription_success.php?success=inscription_reussie");
        exit;
    }
}

// Afficher le formulaire d'inscription avec éventuel message d'erreur
displayRegistrationFormWithError();

// Appeler la fonction pagefooter() pour afficher le pied de page
pagefooter();
?>
