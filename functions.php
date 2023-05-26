
<?php
function setup($titre){
  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <title>'. $titre .'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="background-color:Gray;">
  <img src="./img/Mondial_NFT_Saler_2_1.png" class="img-thumbnail rounded mx-auto d-block" alt="logo">
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
function pageheader($h1){
  echo '<h1 style="color:#ffc107;">'.$h1.'</h1>';
}
function pagefooter(){
  
  echo '<footer class="bg-light text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: Gray;">
  © 2023 Copyright : NFTExchange
  </div>
  <!-- Copyright -->
  </footer>';
}

?>
