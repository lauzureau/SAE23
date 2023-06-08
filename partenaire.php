<?php session_start();
include "./functions.php";
setup("Partenaire");
 ?>
<!DOCTYPE html>
<html class="responsive">

<?php pagenavbar();
pageheader("Nos partenaires"); ?>
<body>
<br> <br> 
<h3>
<p style="text-align:center">En tant que partenaires principaux de notre site web de NFT, XCOPY (ou Xcopyart) et Mad Dog Jones apportent leur talent exceptionnel, leur vision artistique novatrice et leur influence dans le monde de l'art numérique. <br>Leurs œuvres uniques et leur engagement envers l'exploration de nouvelles frontières artistiques font d'eux des acteurs majeurs de la scène des NFT. <br>Nous sommes fiers de collaborer avec ces artistes talentueux pour offrir à notre communauté d'amateurs d'art une expérience inoubliable à travers notre plateforme de NFT. </p></h3>
<div class="row row-cols-1 row-cols-md-2 g-4">
   
  <div class="col"> 
    <style>
        .container{
            position: relative;
            width: 80%;
        }

        .image {
  display: block;
  width: 100%;
  height: auto;
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
  bottom: 0;
  height: 100%;
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
   <div class="text">Autheur : Mad Dog Jones <br>Nom de l'oeuvre: 283 </div>
        </div>
    </div>
    <br> <br><br>
   <h5><p style="text-align:center"> Mad Dog Jones est un artiste numérique renommé pour ses créations saisissantes qui mêlent l'art traditionnel et l'esthétique cyberpunk. Ses œuvres combinent des éléments réalistes avec des éléments futuristes, créant ainsi un monde visuel captivant. Mad Dog Jones explore des thèmes tels que la technologie, la société de consommation, l'aliénation et les relations humaines dans un contexte technologique. Ses œuvres d'art sont riches en détails, en textures et en symbolismes, invitant les spectateurs à réfléchir sur les complexités de notre monde moderne. En tant qu'artiste NFT, Mad Dog Jones a connu un grand succès, avec ses créations uniques recherchées par les collectionneurs du monde entier. </p></h5>
    </div>
  
</div>

  <div class="col">
<style>
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

.container:hover .overlay3 {
  width: 100%;
  left: 0;
}

</style>
       <div class="container">
    <div class="card">
        
      <img src="../img/the vault.gif" class="image" alt="Card image" style="cursor:pointer">
      <div class="overlay3">
         <div class="text">Auteur :XCOPY <br>Platform: SuperRare  <br>Blockchain: Ethereum<br>date de création: 04/04/20<br><br>Type: Unique <br>Edition: 1/1 <br>Licence: CC0 <br>oeuvre: the_vault <br>
         </div>
    <!--  <script>
document.getElementById("IMAGETheVault").addEventListener("click", imageTheVault);

function imageTheVault() {
  document.getElementById("IMAGETheVault").innerHTML = '<h5 class="card-title">The Vault</h5><p class="card-text">XCOPY <br>Platform: SuperRare  <br>Blockchain: Ethereum<br>Minted: 04/04/20<br><br>Type: Unique <br>Edition: 1/1 <br>Licence: CC0 <br>Owner: the_vault <br></p>';  }
  </script> -->

 </div>
    </div>
    <br>     <br> 
    <h5> <p style="text-align: center"> XCOPY est un artiste numérique contemporain connu pour son style distinctif et sa vision futuriste. Ses œuvres d'art sont créées à l'aide de techniques numériques avancées, combinant des éléments du monde réel avec des éléments de la technologie et de la culture contemporaine. Ses créations explorent souvent des thèmes tels que l'intelligence artificielle, la réalité virtuelle, et les enjeux sociétaux liés à la technologie. Les œuvres de XCOPY sont hautement reconnaissables grâce à leur esthétique unique, mêlant des éléments rétro-futuristes et une palette de couleurs vibrantes. En tant qu'artiste émergent dans le domaine des NFT, XCOPY est reconnu pour son influence sur la scène artistique numérique et sa capacité à captiver les amateurs d'art du monde entier.</p></h5>
</div>
</div>

  <div class="col">
    <style>
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

.container:hover .overlay2 {
  width: 100%;
}
</style>
<div class="container">
    <div class="card">
      <img src="../img/known origin.gif" class="image" alt="Card image" style="cursor:pointer">
      <div class="overlay2">
      
        <div class="text">
    Artiste : XCOPY <br>
    Nom de l'oeuvre: Vault<br>
    Type: Edition <br>
    Edition: 1/100 <br>
    Licence: CC0<br>
    Owner: ArtiVault<br>
    Platform: KnownOrigin<br>
    Blockchain: Ethereum<br>
    Minted: 21/10/18<br>
 </div>

      </div>
    </div>
  </div>
</div>

  <div class="col">
    <style>
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

.container:hover .overlay4 {
  height: 100%;
}

</style>
    <div class="container">
    <div  class="card">
      <img src="../img/REPLICATOR.jpg" class="image" alt="Card image" style="cursor:pointer">
      <div class="overlay4">

        <div class="text">

    Autheur : Mad Dog Jones <br>Nom de l’œuvre REPLICATOR </div>
      </div>
    </div>
  </div>
</div>
</div>



<?php  
pagefooter();?>
</body>
</html>
