<?php
// Charger les comptes existants à partir du fichier
$comptes = json_decode(file_get_contents('./js/comptes.json'), true);

// Vérification du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier les identifiants
    foreach ($comptes as $compte) {
        if ($compte['username'] === $username && $compte['password'] === $password) {
            // Identifiants corrects, rediriger vers une page de succès
            header("Location: inscription_success.php?type=connexion&username=" . urlencode($username));
            exit;
        }
    }

    // Identifiants incorrects, afficher un message d'erreur
    $error = "Identifiants incorrects. Veuillez réessayer.";
}

// Reste du code de la page de connexion
include 'functions.php';
setup("Connexion");
pagenavbar();
pageheader("Connexion");

if (isset($error)) {
    echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
}

echo '<form method="POST" action="connexion.php">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d\'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>';

pagefooter();
?>
