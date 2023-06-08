<?php session_start();
include "./functions.php";
setup("SAE23");
 ?>
<!DOCTYPE html>
<html class="responsive">


<body>
    <div class="container mt-3">
    
    <?php pagenavbar();
pageheader("Nos partenaires"); ?> 
<br>  <div class="mt-4 p-5 bg-dark text-warning rounded">
   Nous sommes fiers de vous présenter nos partenaires de renom : Goldman Sachs, JPMorgan Chase et Citigroup. Grâce à leur soutien, nous créons un écosystème solide pour les artistes et les collectionneurs de NFT. Ensemble, nous façonnons l'avenir de l'art numérique et de la finance, offrant des opportunités uniques et une visibilité mondiale aux talents émergents. Rejoignez-nous dans cette nouvelle ère passionnante, où la créativité rencontre l'innovation financière. Explorez nos collections, enchères et événements exclusifs, et découvrez le pouvoir des NFTs dans notre partenariat avec Goldman Sachs, JPMorgan Chase et Citigroup. Bienvenue dans notre univers inspirant.</div>


  <div class="mt-4 p-5 bg-dark text-warning rounded">
<p>En tant que partenaires principaux, XCOPY (ou Xcopyart) et Mad Dog Jones apportent leur talent exceptionnel, leur vision artistique novatrice et leur influence dans le monde de l'art numérique. <br>Leurs œuvres uniques et leur engagement envers l'exploration de nouvelles frontières artistiques font d'eux des acteurs majeurs de la scène des NFT. <br>Nous sommes fiers de collaborer avec ces artistes talentueux pour offrir à notre communauté d'amateurs d'art une expérience inoubliable.</p> </div>
<div class="row row-cols-1 row-cols-md-2 g-4">
   
  <div class="col"> 
    <style>
.container{
            position: relative;
            width: 100%;
            height: 100%;
        }
.image {
  display: block;
  width: 250%;

}
        .text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  white-space: nowrap;
}
.container:hover .overlay{
  bottom:0 ;
  height: 100%;
  width: 250%;
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: grey;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

    </style>
     <div class="container">
    <div class="card">
      <img src="../img/283.jpg" class="image" alt="Card image" style="cursor:pointer">
        <div class="overlay">  
   <!-- <script> //Le script suivant permet d'afficher les infomartions quand on a cliquer sur l'image 283
    document.getElementById("IMAGE293").addEventListener("click", image293);

    function image293() {
  document.getElementById("IMAGE293").innerHTML = ' <h5  class="card-title">283</h5><p id="image" class="card-text">Autheur : Mad Dog Jones</p>';
    }
  </script> -->
   <div class="text">Autheur : Mad Dog Jones <br>Nom de l'oeuvre: 283 <br>Platform: NFTExchange</div>
        </div>
    </div>
      <br> <br><br>
    <div class="mt-4 p-5 bg-dark text-warning rounded">
      <p> Mad Dog Jones est un artiste numérique renommé pour ses créations saisissantes qui mêlent l'art traditionnel et l'esthétique cyberpunk. Ses œuvres combinent des éléments réalistes avec des éléments futuristes, créant ainsi un monde visuel captivant. Mad Dog Jones explore des thèmes tels que la technologie, la société de consommation, l'aliénation et les relations humaines dans un contexte technologique. Ses œuvres d'art sont riches en détails, en textures et en symbolismes, invitant les spectateurs à réfléchir sur les complexités de notre monde moderne. En tant qu'artiste NFT, Mad Dog Jones a connu un grand succès, avec ses créations uniques recherchées par les collectionneurs du monde entier. </p>
    </div>
  </div>
</div>

  <div class="col">
<style>
          .container3{
            position: relative;
            width: 100%;
            height: 100%;
        }

        .image3 {
  display: block;
  width: 200%;

}
        .text3 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  white-space: nowrap;
}
.overlay3 {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color:grey;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container3:hover .overlay3 {
  width: 200%;
  left: 0;
}

</style>
       <div class="container3">
    <div class="card"> 
      <img src="./img/the vault.gif" class="image3" alt="Card image" style="cursor:pointer">
      <div class="overlay3">
         <div class="text3">Auteur :XCOPY <br>Platform: NFTExchange  <br>Blockchain: Ethereum<br>date de création: 04/04/20<br><br>Type: Unique <br>Edition: 1/1 <br>Licence: CC0 <br>oeuvre: the_vault <br>
         </div>
    <!--  <script>
document.getElementById("IMAGETheVault").addEventListener("click", imageTheVault);

function imageTheVault() {
  document.getElementById("IMAGETheVault").innerHTML = '<h5 class="card-title">The Vault</h5><p class="card-text">XCOPY <br>Platform: SuperRare  <br>Blockchain: Ethereum<br>Minted: 04/04/20<br><br>Type: Unique <br>Edition: 1/1 <br>Licence: CC0 <br>Owner: the_vault <br></p>';  }
  </script> -->

 </div>
    </div>
    <br>     <br> 
       <div class="mt-4 p-5 bg-dark text-warning rounded">
    <p style="text-align: center"> XCOPY est un artiste numérique contemporain connu pour son style distinctif et sa vision futuriste. Ses œuvres d'art sont créées à l'aide de techniques numériques avancées, combinant des éléments du monde réel avec des éléments de la technologie et de la culture contemporaine. Ses créations explorent souvent des thèmes tels que l'intelligence artificielle, la réalité virtuelle, et les enjeux sociétaux liés à la technologie. Les œuvres de XCOPY sont hautement reconnaissables grâce à leur esthétique unique, mêlant des éléments rétro-futuristes et une palette de couleurs vibrantes. En tant qu'artiste émergent dans le domaine des NFT, XCOPY est reconnu pour son influence sur la scène artistique numérique et sa capacité à captiver les amateurs d'art du monde entier.</p> </div>
</div>
</div>

  <div class="col">
    <style>
              .container2{
            position: relative;
            width: 100%;
            height: 100%;
        }
                .text2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  white-space: nowrap;
}

        .image2 {
  display: block;
  width: 200%;
}
.overlay2 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: grey;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container2:hover .overlay2 {
  width: 200%;
}
</style>
<div class="container2">
    <div class="card">
      <img src="../img/known origin.gif" class="image2" alt="Card image" style="cursor:pointer">
      <div class="overlay2">
      
        <div class="text2">
    Artiste : XCOPY <br>
    Nom de l'oeuvre: Vault<br>
    Type: Edition <br>
    Edition: 1/100 <br>
    Licence: CC0<br>
    Owner: ArtiVault<br>
    Platform: NFTExchange<br>
    Blockchain: Ethereum<br>
    Minted: 21/10/18<br>
 </div>

      </div>
    </div>
  </div>
</div>

  <div class="col">
    <style>
          .container4{
            position: relative;
            width: 100%;
            height: 100%;
        }

        .image4 {
  display: block;
  width: 200%;

}
.overlay4 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: grey;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container4:hover .overlay4 {
  height: 100%;
  width: 200%;

}

</style>
    <div class="container4">
    <div  class="card">
      <img src="../img/REPLICATOR.jpg" class="image4" alt="Card image" style="cursor:pointer">
      <div class="overlay4">

        <div class="text">

    Autheur : Mad Dog Jones <br>Nom de l’œuvre REPLICATOR <br>Platform: NFTExchange </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>



<?php  
pagefooter();?>
</body>
</html>
