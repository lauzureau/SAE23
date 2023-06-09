<?php

include "functions.php";

setup("SAE23");

echo ' <div class="container mt-3">';

pageheader('NTFExchange');

pagenavbar();

echo '<h1 style="color:#ffc107;">Wiki</h1>';

echo '<div class="mt-4 p-5 bg-dark text-warning rounded">';
echo "<p>Notre site fonctionne principalement grâce à la page function.php qui regroupe toutes les fonctions permettant la mise en place de la navbarre, du footer ou encore du header. <br>
Notre site fonctionne avec du code HTML, CSS et Js. <br>

</p>
	</div>";
	echo '<div class="mt-4 p-5 bg-dark text-warning rounded">';
echo "<p>La page suivante est une boutique vitrine d'échange de NFTs. Voici ses fonctionnalités et spécificités en 20 lignes : <br>

1. La page utilise la fonction <i>include</i> pour inclure un fichier nommé 'functions.php' qui contient probablement des fonctions utilisées dans le script.<br>

2. La fonction <i>setup('SAE23')</i> est appelée pour effectuer une configuration initiale, avec l'argument 'SAE23'. Le rôle précis de cette fonction est inconnu sans accéder à sa définition.
<br>
3. La page utilise un conteneur <i> div </i> avec la classe  <i> container mt-3</i> pour envelopper son contenu.
<br>
4. La fonction <i>pageheader('NTFExchange')</i> est appelée pour générer l'en-tête de la page, avec le titre 'NTFExchange'.
<br>
5. La fonction <i>pagenavbar()</i> est appelée pour générer une barre de navigation pour la page.
<br>
6. La page affiche un titre  <i> h1> </i> avec le texte 'Boutique vitrine', stylé avec la couleur '#ffc107' (jaune).
<br>
7. Un paragraphe <i> p </i> est affiché avec le texte 'Vous devez vous connecter pour pouvoir acheter des NFT', également stylé avec la couleur '#ffc107'.
<br>
8. La page définit des données fictives pour les articles de NFT, stockées dans trois tableaux nommés '$ articles_col1', '$ articles_col2' et '$ articles_col3'. Chaque article a un nom et une image.
<br>
9. Les images des articles de NFT sont affichées dans une mise en page en trois colonnes.
<br>
10. Chaque colonne utilise une boucle `foreach` pour itérer sur les articles correspondants dans les tableaux de données. Une carte est générée pour chaque article, avec l'image affichée à l'intérieur.
<br>
11. Les cartes sont stylées avec des classes CSS pour définir leur apparence.

12. La mise en page des colonnes et des cartes est réalisée en utilisant des classes CSS de Bootstrap, telles que 'col' pour les colonnes et 'card' pour les cartes.
<br>
13. Les images des articles sont définies en utilisant la valeur de l'attribut 'src' des balises <i> img </i> qui est récupérée à partir des données des articles.
<br>
14. La page enveloppe le contenu des colonnes dans des balises <i> div </i> pour une organisation appropriée.
<br>
15. Les balises de fermeture <i> /div </i> sont utilisées pour terminer la structure HTML des colonnes et des cartes.
<br>
16. La page utilise des classes CSS supplémentaires pour définir le style du fond, du texte et de la mise en forme.
<br>
17. La page utilise également des classes CSS pour ajouter des marges, des bordures arrondies et d'autres styles visuels.
<br>
18. La fonction <i>pagefooter()</i> est appelée pour générer le pied de page de la page.
<br>
19. La page générée est essentiellement statique, ce qui signifie que les articles de NFT sont prédéfinis dans le code et ne peuvent pas être modifiés dynamiquement.
<br>
20. Pour obtenir une fonctionnalité complète de la boutique vitrine, il serait nécessaire de connecter cette page à un système d'authentification, d'accéder à une base de données réelle contenant les informations des articles, et de permettre aux utilisateurs de visualiser et d'acheter les NFTs.'

</p>
	</div>";

pagefooter();

?>
