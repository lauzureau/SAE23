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
      <link rel="icon" type="image/x-icon" href="./img/Mondial_NFT_Saler_1.ico">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="background-color:Gray;">
  <img src="./img/Mondial_NFT_Saler_2_1.png" class="img-thumbnail rounded mx-auto d-block" alt="logo">';
}
function pagenavbar(){
  echo '<nav class="navbar navbar-expand-sm bg-dark navbar-dark style="position: absolute; top: 100%;">
  <div class="container-fluid">
  <ul class="navbar-nav">
  <li class="nav-item">
  <a class="nav-link" href="index.php">Accueil</a>
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
  <a class="nav-link" href="partenaire.php">Nos partenaires</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="boutique_vitrine.php">Boutique</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="annuaire.php">Annuaire</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="recherche.php">Recherche</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="Wiki.php">Wiki</a>
  </li>
  </ul>
  <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Inscription</a>
          </li>
        </ul>

  </div>
  </nav>';
}
function pageheader($title){


  echo '
  <h1 style="color:#ffc107;">';

  // Modifier le titre en fonction du contexte
  if ($title === "connexion_reussie") {
      echo "Connexion réussie";
  } elseif ($title === "inscription_reussie") {
      echo "Inscription réussie";
  } else {
      echo $title;
  }

  echo '</h1>';
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
// Fonction pour trouver les employés correspondants à un mot-clé
function findEmployes($employes, $keyword) {
  $results = array();

  // Parcourir tous les employés
  foreach ($employes as $employe) {
      // Vérifier si le nom de l'employé contient le mot-clé
      if (stripos($employe['username'], $keyword) !== false) {
          // Ajouter l'employé aux résultats
          $results[] = $employe;
      }
  }

  return $results;
}

// Fonction pour afficher les employés
function showEmployes($employes) {
  foreach ($employes as $employe) {
      echo '<div class="employee-profile">';
      echo '<img src="' . $employe['photo'] . '" alt="Photo de ' . $employe['username'] . '">';
      echo '<h2>' . $employe['username'] . '</h2>';

      if (is_array($employe['groups'])) {
          echo '<p>Poste : ' . implode(', ', $employe['groups']) . '</p>';
      } else {
          echo '<p>Poste : ' . $employe['groups'] . '</p>';
      }

      echo '<p>Email : ' . $employe['email'] . '</p>';
      echo '</div>';
  }
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
