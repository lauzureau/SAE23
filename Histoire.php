<!DOCTYPE html>
<html>
<head>
    <title>Histoire</title>
    <style>
        .card-container {
            perspective: 1000px;
            width: 200px;
            height: 260px;
            position: relative;
        }
        
        .card {
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            cursor: pointer;
        }
        
        .card.flipped {
            transform: rotateY(180deg);
        }
        
        .card-front,
        .card-back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
        }
        
        .card-front {
            background-color: #F8F8F8;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card-back {
            background-color: #E0E0E0;
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Ajout de cette ligne */
        }
    </style>
    <script>
        function flipCard(element) {
            element.classList.toggle("flipped");
        }
    </script>
</head>
<body>
    <?php
    include "functions.php";
    setup("SAE23");
    
    echo '<div class="container mt-3">';
    pageheader('NTFExchange');
    pagenavbar();
    
    echo '<div class="center-container">'; // Container to center the card section
    
    echo '<div class="card-container">';
    
    // Timeline item 1
    echo '<div class="card" onclick="flipCard(this)">';
    echo '<div class="card-front">';
    echo '<h3>2017</h3>';
    echo '</div>';
    echo '<div class="card-back">';
    echo '<h3>2017</h3>';
    echo '<p>Fondation de NTFExchange par un groupe d\'entrepreneurs passionnés par le potentiel des NFTs dans le domaine de l\'art numérique.</p>';
    echo '</div>';
    echo '</div>';
    
    // Timeline item 2
    echo '<div class="card" onclick="flipCard(this)">';
    echo '<div class="card-front">';
    echo '<h3> 2018</h3>';
    echo '</div>';
    echo '<div class="card-back">';
    echo '<h3>2018</h3>';
    echo '<p>Sous la présidence de John Davis, NTFExchange connaît une croissance significative et devient une plateforme réputée pour l\'achat, la vente et l\'échange de NFTs. L\'entreprise établit des partenariats stratégiques avec des artistes et des collectionneurs influents.</p>';
    echo '</div>';
    echo '</div>';
    
    // Timeline item 3
    echo '<div class="card" onclick="flipCard(this)">';
    echo '<div class="card-front">';
    echo '<h3> 2021</h3>';
    echo '</div>';
    echo '<div class="card-back">';
    echo '<h3> 2021</h3>';
    echo '<p>NTFExchange lance sa propre plateforme de création et de vente de NFTs, offrant ainsi une solution complète pour les artistes souhaitant se lancer dans l\'univers des NFTs.</p>';
    echo '</div>';
    echo '</div>';
    
    // Timeline item 4
    echo '<div class="card" onclick="flipCard(this)">';
    echo '<div class="card-front">';
    echo '<h3> 2023</h3>';
    echo '</div>';
    echo '<div class="card-back">';
    echo '<h3>2023</h3>';
    echo '<p>NTFExchange franchit le cap des 10 millions de NFTs vendus sur sa plateforme, devenant ainsi l\'une des principales références du marché des NFTs.</p>';
    echo '</div>';
    echo '</div>';
    
    echo '</div>'; // .card-container

    echo '</div>'; // .center-container
    
    pagefooter();
    ?>
</body>
</html>
