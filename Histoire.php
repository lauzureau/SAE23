<?php
include "functions.php";
setup("SAE23");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
<body>
<?php
echo ' <div class="container mt-3">';
pageheader('NTFExchange');
pagenavbar();
?>

<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p> Fondation de NTFExchange par un groupe d'entrepreneurs passionnés par le potentiel des NFTs dans le domaine de l'art numérique.</p>

      </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2018</h2>
      <p> Sous la présidence de John Davis, NTFExchange connaît une croissance significative et devient une plateforme réputée pour l'achat, la vente et l'échange de NFTs. L'entreprise établit des partenariats stratégiques avec des artistes et des collectionneurs influents.</p>

    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2019</h2>
      <p> NTFExchange élargit ses services en acquérant une entreprise spécialisée dans la vérification et l'authentification des NFTs. Cela renforce la confiance des utilisateurs dans l'authenticité des actifs numériques échangés sur la plateforme.</p>

         </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2020</h2>
      <p>  Changement de présidence à la tête de NTFExchange. Sarah Thompson, une entrepreneuse visionnaire, prend les rênes de l'entreprise. Sous sa direction, NTFExchange connaît une expansion internationale et ouvre des bureaux dans plusieurs pays, établissant ainsi une présence mondiale.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2021</h2>
      <p>NTFExchange établit un partenariat stratégique avec une marque célèbre du divertissement, offrant des collections exclusives de NFTs basées sur des franchises populaires.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
    <h2>2022</h2>
    <p>  NTFExchange lance sa propre galerie d'art numérique en ligne, offrant aux artistes émergents une plateforme pour exposer leurs œuvres et aux collectionneurs une sélection unique d'NFTs à découvrir.</p>
</div>
  </div>
</div>
<?php
pagefooter();
?>
</body>
</html>
