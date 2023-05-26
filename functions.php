
<?php
function setup($titre, $stitre){
  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <title>'. $titre .'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>'. $titre .'</h1>
  <p>'. $stitre .'</p>
  <div class="connexion-header">
  <span class="text-dark">Vous n êtes pas connecté</span>
  <a href="#" class="btn btn-outline-dark btn-sm">Se connecter</a>
  </div> 
  </div>';
}
function pagenavbar(){
  echo '<nav class="navbar navbar-expand-sm bg-dark navbar-dark style="position: absolute; top: 100%;">
  <div class="container-fluid">
  <ul class="navbar-nav">
  <li class="nav-item">
  <a class="nav-link" href="page01.php">Accueil</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page02.php">Formulaire</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page03.php">Traitement Fomulaire</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page04.php">Informations</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page05.php">Fichiers</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page06.php">Administration</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page07.php">Gestion des utilisateurs</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="page08.php">Fonctionnalitées</a>
  </li>
  </ul>
  </div>
  </nav>';
}
function pageheader($h1, $p){
  echo "<h1>$h1</h1>
  <p>$p</p>";
}
function pagefooter(){
  
  echo '<footer class="bg-light text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2023 Copyright : Auzureau Loïck
  </div>
  <!-- Copyright -->
  </footer>';
}

?>
