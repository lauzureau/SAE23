<? php

function setup() {
    // Inclure les liens vers les fichiers CSS de Bootstrap
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
    
    // Ajouter l'icône visible sur l'onglet du navigateur
    echo '<link rel="icon" href="images/icone2.png">';
    
    // Définir le titre de la page visible dans l'onglet du navigateur
    echo '<title>Bibliothèque</title>';
    echo '
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        </head>
        <body>
    ';
}

function pageheader() {
    echo '
    <div class="p-5 bg-secondary text-white">
        <div class="row">
            <div class="col">
                <img src="images/icone3.png" class="rounded float-start" alt="Icone">
            </div>
            <div class="col">
                <h1>BingoBook</h1>
                <p>Tah la bibliothèque</p>
            </div>
            <div class="col clearfix">
                <button type="button" class="btn btn-primary float-end">Connexion</button>
            </div>
        </div>
    </div>
    ';
}

?>