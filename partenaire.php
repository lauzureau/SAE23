<?php session_start();
include "./functions.php";
setup("Partenaire");
 ?>
<!DOCTYPE html>
<html>

<?php pagenavbar();
pageheader("Partenaire"); ?>
<body>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div id="Div" class="card">
      <img onclick="Image()" src="../img/283.jpg" class="card-img-top" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5  class="card-title">283</h5>
        <p id="image" class="card-text">
            Autheur : Mad Dog Jones

</p>
      </div>
    </div>
  </div>
<style type="text/css">
    div {
  animation: mymove 5s linear alternate;
}

@keyframes mymove {
  to {transform: rotateY(180deg);}
}
</style>
  <script>
    function Image() {
  let text = document.getElementById("image").innerHTML;
  document.getElementById("image").innerHTML =
  text.toUpperCase();
}
function myFunction(x) {
  if (x.checked === true) {
    document.getElementById("Div").style.backfaceVisibility = "visible";
  }
}
  </script>
  <div class="col">
    <div class="card">
      <img id="image" src="../img/the vault.gif" class="card-img-top" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">The Vault</h5>
        <p class="card-text">            XCOPY <br>
Platform: SuperRare  <br>
Blockchain: Ethereum<br>
Minted: 04/04/20<br>
<br>
Type: Unique <br>
Edition: 1/1 <br>
Licence: CC0 <br>
Owner: the_vault <br>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../img/known origin.gif" class="card-img-top" alt="Card image">
      <div class="card-body">
        <h5 class="card-title">Vault</h5>
        <p class="card-text">Type: Edition <br>
Edition: 1/100 <br>
Licence: CC0 <br>
Owner: ArtiVault <br>
Platform: KnownOrigin<br>
Minted: 21/10/18</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../img/REPLICATOR.jpg" class="card-img-top" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Replicator</h4>
        <p class="card-text">Autheur :
Mad Dog Jones <br>
Nom de l’œuvre REPLICATOR</p>
      </div>
    </div>
  </div>


<?php  
pagefooter();?>
</body>
</html>

<?php  
?>