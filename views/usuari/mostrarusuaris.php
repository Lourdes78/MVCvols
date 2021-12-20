<table class="table table-striped" style="border: 1 ">
    <tr>
    <th>Nom</th>
    <th>Contrasenya</th>
    <th>Correu</th>
    <th>Adreça</th>
    <th>Dni</th>
    <th>Telefon</th>
    <th>Número de tarjeta</th>
    <th>Modificar</th>
    <th>Eliminar</th>
    
    </tr>
<?php
while($row = $usuaris->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['contrasenya']."</td>";
    echo "<td>".$row['correu']."</td>";
    echo "<td>".$row['adreça']."</td>";
    echo "<td>".$row['dni']."</td>";
    echo "<td>".$row['telefon']."</td>";
    echo "<td>".$row['num_tarjeta']."</td>";
    echo "<td><a href='index.php?controller=usuari&action=modificar&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=usuari&action=eliminar&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";