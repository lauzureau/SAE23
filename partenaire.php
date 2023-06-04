<?php session_start();
include "./functions.php";
setup("Partenaire");
 ?>
<!DOCTYPE html>
<html class="responsive">

<?php pagenavbar();
pageheader("Nos partenaires"); ?>
<body>

<div class="row row-cols-1 row-cols-md-2 g-4">
   
  <div class="col"> 
    <style>
        .container{
            position: relative;
            width: 50%;
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

         <h5  class="card-title">283</h5>
      <img src="../img/283.jpg" class="image" alt="Card image" style="cursor:pointer">
        <div class="overlay">  
   <!-- <script> //Le script suivant permet d'afficher les infomartions quand on a cliquer sur l'image 283
    document.getElementById("IMAGE293").addEventListener("click", image293);

    function image293() {
  document.getElementById("IMAGE293").innerHTML = ' <h5  class="card-title">283</h5><p id="image" class="card-text">Autheur : Mad Dog Jones</p>';
    }
  </script> -->
   <div class="text">Autheur : Mad Dog Jones</div>
        </div>
    </div>
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
        <h5 class="card-title">The Vault</h5>
      <img src="../img/the vault.gif" class="image" alt="Card image" style="cursor:pointer">
      <div class="overlay3">
         <div class="text">XCOPY <br>Platform: SuperRare  <br>Blockchain: Ethereum<br>Minted: 04/04/20<br><br>Type: Unique <br>Edition: 1/1 <br>Licence: CC0 <br>Owner: the_vault <br></div>
    <!--  <script>
document.getElementById("IMAGETheVault").addEventListener("click", imageTheVault);

function imageTheVault() {
  document.getElementById("IMAGETheVault").innerHTML = '<h5 class="card-title">The Vault</h5><p class="card-text">XCOPY <br>Platform: SuperRare  <br>Blockchain: Ethereum<br>Minted: 04/04/20<br><br>Type: Unique <br>Edition: 1/1 <br>Licence: CC0 <br>Owner: the_vault <br></p>';  }
  </script> -->

 </div>
    </div>
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
        <h5 class="card-title">Vault</h5>
        <div class="text">Type: Edition <br>
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
