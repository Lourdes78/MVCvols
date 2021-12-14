<?php
include "views/header.php";
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-8">
    <form action="index.php" method="post">

<input type="text" name="origen" id=""><br>
<input type="text" name="desti" id=""><br>
<input type="text" name="preu" id=""><br>
<input type="text" name="foto" id=""><br>
<input type="text" name="nombre_places" id=""><br>
<input type="submit" name="submit" value="Insertar"><br>
</form>
</div>
</div>
</div>
<?php 
require "models/vol.php";
if(isset($_POST['submit'])){
$origen = $_POST['origen'];
$desti = $_POST['desti'];
$preu = $_POST['preu'];
$foto = $_POST['foto'];
$nombre_places = $_POST['nombre_places'];
$vol = new Vol($origen,$desti,$preu,$foto,$nombre_places);

$vol->insertar();
}
include "views/footer.php";
?>

</body>
</html>
