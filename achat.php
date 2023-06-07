<?php
include "functions.php";

setup("SAE23");

echo ' <div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

?>
<body>
    <h1>Page d'achat</h1>

    <?php
    // Données des articles (à remplacer par des données réelles)
    $articles = [
        [
            'nom' => 'Article 1',
            'image' => 'img/nft1.jpg',
            'lien' => 'lien/vers/acheter1'
        ],
        [
            'nom' => 'Article 2',
            'image' => 'img/nft2.jpg',
            'lien' => 'lien/vers/acheter2'
        ],
        [
            'nom' => 'Article 3',
            'image' => 'img/nft3.jpg',
            'lien' => 'lien/vers/acheter3'
        ]
    ];

    // Afficher les cartes pour chaque article
    foreach ($articles as $article) {
        echo '<div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <h2>' . $article['nom'] . '</h2>
                        <img src="' . $article['image'] . '">
                    </div>
                    <div class="card-back">
                        <a href="' . $article['lien'] . '">Acheter</a>
                    </div>
                </div>
            </div>';
    }
    ?>

    <script>
        function flipCard(card) {
            card.classList.toggle('flip');
        }
    </script>
</body>
</html>

<?php

pagefooter();
?>
