<?php
include "functions.php";

setup("SAE23");

echo '<div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

?>

<?php

// Vérifier si l'utilisateur est connecté
session_start();
if (!isset($_SESSION['user'])) {
    // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: login.php');
    exit;
}

// Vérifier si l'utilisateur a les autorisations appropriées
$user = $_SESSION['user'];
if (!in_array("admin", $user['groups'])) {
    // L'utilisateur n'a pas les autorisations d'administrateur, afficher un message d'erreur
    echo "Accès refusé. Vous devez être un administrateur pour accéder à cette page.";
    exit;
}

// Fonction pour charger la liste des partenaires depuis un fichier JSON
function loadPartners() {
    $partnersData = file_get_contents('./js/partners.json');
    return json_decode($partnersData, true);
}

// Fonction pour enregistrer la liste des partenaires dans un fichier JSON
function savePartners($partners) {
    $partnersData = json_encode($partners, JSON_PRETTY_PRINT);
    file_put_contents('./js/partners.json', $partnersData);
}

// Charger la liste des partenaires
$partners = loadPartners();

// Vérifier si le formulaire d'ajout a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_partner'])) {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $website = $_POST['website'];
    $logo = $_FILES['logo'];

    // Vérifier si un logo a été téléchargé
    if ($logo['error'] === UPLOAD_ERR_OK) {
        // Déplacer le fichier téléchargé vers un emplacement permanent
        $logoName = $logo['name'];
        $logoPath = './img/' . $logoName;
        move_uploaded_file($logo['tmp_name'], $logoPath);
    } else {
        // Utiliser un logo par défaut si aucun fichier n'a été téléchargé
        $logoName = 'default_logo.png';
        $logoPath = './img/' . $logoName;
    }

    // Créer un nouvel objet partenaire
    $newPartner = [
        'name' => $name,
        'website' => $website,
        'logo' => $logoPath
    ];

    // Ajouter le partenaire à la liste
    $partners[] = $newPartner;

    // Enregistrer la liste mise à jour dans le fichier JSON
    savePartners($partners);
}

// Vérifier si le formulaire de suppression a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_partner'])) {
    // Récupérer l'indice du partenaire à supprimer
    $partnerIndex = $_POST['partner_index'];

    // Vérifier si l'indice est valide
    if (isset($partners[$partnerIndex])) {
        // Supprimer le partenaire de la liste
        unset($partners[$partnerIndex]);

        // Réorganiser les indices de la liste
        $partners = array_values($partners);

        // Enregistrer la liste mise à jour dans le fichier JSON
        savePartners($partners);
    }
}

// Afficher le contenu de la page
echo '<div class="mt-4 p-5 bg-dark text-warning rounded">';
echo '<div class="container mt-3">';
pageheader('Gestion des partenaires');

// Formulaire d'ajout de partenaire
echo '
    <h3>Ajouter un partenaire</h3>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom du partenaire :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="website">Site Web :</label>
            <input type="text" class="form-control" id="website" name="website" required>
        </div>
        <div class="form-group">
            <label for="logo">Logo :</label>
            <input type="file" class="form-control-file" id="logo" name="logo" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary" name="add_partner">Ajouter</button>
    </form>
    <hr>
';

// Liste des partenaires existants
echo '<h3>Partenaires existants</h3>';
if (count($partners) > 0) {
    echo '<ul>';
    foreach ($partners as $index => $partner) {
        echo '
            <li>
                <div class="row">
                    <div class="col-md-3">
                        <img src="' . $partner['logo'] . '" alt="' . $partner['name'] . '" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <strong>' . $partner['name'] . '</strong><br>
                        Site Web : <a href="' . $partner['website'] . '" target="_blank">' . $partner['website'] . '</a>
                    </div>
                    <div class="col-md-3">
                        <form method="post">
                            <input type="hidden" name="partner_index" value="' . $index . '">
                            <button type="submit" class="btn btn-danger" name="delete_partner">Supprimer</button>
                        </form>
                    </div>
                </div>
            </li>
            <hr>
        ';
    }
    echo '</ul>';
} else {
    echo 'Aucun partenaire enregistré.';
}

echo '</div>'; // Fermer la balise container
echo '</div>';
?>

<?php
pagefooter();
?>
