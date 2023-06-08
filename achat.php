<?php
include "functions.php";

setup("SAE23");

echo '<div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();
?>

<body>
    <h1>Page d'achat</h1>

    <?php
    // Données des articles (à remplacer par des données réelles)
    $articles_col1 = [
        [
            'nom' => 'Article 1',
            'image' => 'img/nft1.jpg',
            'lien' => 'img/nft1.jpg' // Lien direct vers l'image
        ],
        [
            'nom' => 'Article 2',
            'image' => 'img/nft2.jpg',
            'lien' => 'img/nft2.jpg'
        ],
        [
            'nom' => 'Article 3',
            'image' => 'img/nft3.jpg',
            'lien' => 'img/nft3.jpg'
        ]
    ];
    $articles_col2 = [
        [
            'nom' => 'Article 4',
            'image' => 'img/nft4.jpg',
            'lien' => 'img/nft4.jpg'
        ],
        [
            'nom' => 'Article 5',
            'image' => 'img/nft5.jpg',
            'lien' => 'img/nft5.jpg'
        ],
        [
            'nom' => 'Article 6',
            'image' => 'img/nft6.jpg',
            'lien' => 'img/nft6.jpg'
        ]
    ];
    $articles_col3 = [
        [
            'nom' => 'Article 7',
            'image' => 'img/nft7.jpg',
            'lien' => 'img/nft7.jpg'
        ],
        [
            'nom' => 'Article 8',
            'image' => 'img/nft8.jpg',
            'lien' => 'img/nft8.jpg'
        ],
        [
            'nom' => 'Article 9',
            'image' => 'img/nft9.jpg',
            'lien' => 'img/nft9.jpg'
        ]
    ];

    // Afficher les cartes pour chaque article
    echo '<div class="row">';
    
    // Colonne 1
    echo '<div class="col">';
    foreach ($articles_col1 as $article) {
        echo '<div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="' . $article['image'] . '">
                    </div>
                    <div class="card-back">
                        <a href="' . $article['lien'] . '" download>ACHETER</a>
                    </div>
                </div>
            </div>';
    }
    echo '</div>';

    // Colonne 2
    echo '<div class="col">';
    foreach ($articles_col2 as $article) {
        echo '<div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="' . $article['image'] . '">
                    </div>
                    <div class="card-back">
                        <a href="' . $article['lien'] . '" download>ACHETER</a>
                    </div>
                </div>
            </div>';
    }
    echo '</div>';

    // Colonne 3
    echo '<div class="col">';
    foreach ($articles_col3 as $article) {
        echo '<div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="' . $article['image'] . '">
                    </div>
                    <div class="card-back">
                        <a href="' . $article['lien'] . '" download>ACHETER</a>
                    </div>
                </div>
            </div>';
    }
    echo '</div>';

    echo '</div>';
    ?>

    <script>
        function flipCard(card) {
            card.classList.toggle('flip');
        }
    </script>
</body>

<?php
pagefooter();
?>
