<?php
// Vérification du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Vérifier si les champs sont vides
    if (empty($username) || empty($password) || empty($email)) {
        $error = "Veuillez remplir tous les champs du formulaire.";
    } else {
        // Créer un tableau associatif pour stocker les informations du compte
        $nouveauCompte = array(
            'username' => $username,
            'password' => $password,
            'email' => $email
        );

        // Charger les comptes existants à partir du fichier
        $comptes = json_decode(file_get_contents('comptes.json'), true);

        // Vérifier si le fichier est vide ou n'a pas pu être lu
        if ($comptes === null) {
            $comptes = array();
        }

        // Ajouter le nouveau compte au tableau des comptes
        $comptes[] = $nouveauCompte;

        // Enregistrer les comptes dans le fichier
        file_put_contents('comptes.json', json_encode($comptes));

        // Rediriger l'utilisateur vers une page de succès
        header("Location: inscription_success.php");
        exit;
    }
}
?>
