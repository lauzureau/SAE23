<?php
include "functions.php";

setup("SAE23");

echo '<div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();
?>

<body>
    <h1>Boutique vitrine</h1>
    <p>Vous devez vous connecter pour pouvoir acheter des NFT</p>
    <?php
    // Données des articles (à remplacer par des données réelles)
    $articles_col1 = [
        [
            'nom' => 'Article 1',
            'image' => 'img/nft1.jpg'
        ],
        [
            'nom' => 'Article 2',
            'image' => 'img/nft2.jpg'
        ],
        [
            'nom' => 'Article 3',
            'image' => 'img/nft3.jpg'
        ]
    ];
    $articles_col2 = [
        [
            'nom' => 'Article 4',
            'image' => 'img/nft4.jpg'
        ],
        [
            'nom' => 'Article 5',
            'image' => 'img/nft5.jpg'
        ],
        [
            'nom' => 'Article 6',
            'image' => 'img/nft6.jpg'
        ]
    ];
    $articles_col3 = [
        [
            'nom' => 'Article 7',
            'image' => 'img/nft7.jpg'
        ],
        [
            'nom' => 'Article 8',
            'image' => 'img/nft8.jpg'
        ],
        [
            'nom' => 'Article 9',
            'image' => 'img/nft9.jpg'
        ]
    ];

    // Afficher les images pour chaque article
    echo '<div class="mt-4 p-5 bg-dark text-warning rounded">';
    echo '<div class="row">';
    
    // Colonne 1
    echo '<div class="col">';
    foreach ($articles_col1 as $article) {
        echo '<div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="' . $article['image'] . '">
                    </div>
                </div>
            </div>';
    }
    echo '</div>';

    // Colonne 2
    echo '<div class="col">';
    foreach ($articles_col2 as $article) {
        echo '<div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="' . $article['image'] . '">
                    </div>
                </div>
            </div>';
    }
    echo '</div>';

    // Colonne 3
    echo '<div class="col">';
    foreach ($articles_col3 as $article) {
        echo '<div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="' . $article['image'] . '">
                    </div>
                </div>
            </div>';
    }
    echo '</div>';

    echo '</div>';
    echo '</div>';
    ?>

</body>

<?php
pagefooter();
?>
