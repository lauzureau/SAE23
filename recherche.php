<?php
// Inclure la page function
include('functions.php');

// Définir le titre de la page
$title = 'Formulaire de recherche';

// Appeler la fonction setup pour inclure les fichiers CSS et JavaScript de Bootstrap, et définir le titre de la page
setup($title);
echo ' <div class="container mt-3">';
// Créer la navbar et définir la page active
$pagenum = 'page02';
pagenavbar($pagenum);

// Créer le header
pageheader('NTFExchange');
?>

<div class="container mt-5">
    <h2>Recherche d'employés</h2>

    <?php
    // Si le formulaire a été soumis
    if(isset($_POST['search'])) {
        // Récupérer la recherche de l'utilisateur
        $keyword = $_POST['keyword'];

        // Chercher les employés correspondants
        $employes = json_decode(file_get_contents('.\js\comptes.json'), true);
        $results = findEmployes($employes, $keyword);

        // Afficher les résultats de la recherche
        if(empty($results)) {
            echo '<p>Aucun employé ne correspond à votre recherche.</p>';
        } else {
            echo '<p>Résultats de la recherche pour "'.$keyword.'":</p>';
            showEmployes($results);
        }
    }
    ?>

    <!-- Formulaire de recherche -->
    <form method="post" action="">
        <div class="mb-3">
            <label for="keyword" class="form-label">Mot-clé :</label>
            <input type="text" name="keyword" class="form-control" id="keyword" required>
        </div>
        <button type="submit" name="search" class="btn btn-primary">Rechercher</button>
    </form>
</div>

<?php
// Créer le footer et fermer la page
pagefooter();
?>
