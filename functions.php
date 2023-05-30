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
  <a class="nav-link" href="Accueil.php">Accueil</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="About.php">Qui sommes nous ?</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="Histoire.php">Histoire</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="Activites.php">Activités</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="Partenaires.php">Nos partenaires</a>
  </li>
  </ul>
  <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inscription</a>
          </li>
        </ul>
  </div>
  </nav>';
  echo '
  <!-- Fenêtre modale de connexion -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulaire de connexion -->
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Nom d\'utilisateur</label>
              <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>';
}
function pageheader($h1){
  echo '<h1 style="color:#ffc107;">'.$h1.'</h1>';
}

function displayRegistrationFormWithError() {
  // Vérifier s'il y a une erreur à afficher
  if (isset($error)) {
    echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
  }

  // Afficher le formulaire d'inscription
  echo '<form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Nom d\'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">S\'inscrire</button>
        </form>';
}
function pagefooter(){
  
  echo '<footer class="bg-light text-center text-lg-start ">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: Gray;">
  © 2023 Copyright : NFTExchange
  </div>
  <!-- Copyright -->
  </footer>';
}
?>
