<H2>MOSTRAR VOLS</H2>
<table class="table table-striped" style="border: 1">
    <tr>
    <th>Origen</th>
    <th>Desti</th>
    <th>Preu</th>
    <th>Foto</th>
    <th>Nombre de places</th>
    <th>Modificar</th>
    <th>Eliminar</th>
    <th>Reservar</th>
    
    </tr>
<?php
while($row = $vols->fetch_assoc()){
    echo "<tr>";
  
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td><img src='img/" .$row['foto'] . "'  width=\"50\" height=\"60\"></td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=vol&action=modificar&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=vol&action=eliminar&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=reserva&action=insertarreserves&codi=".$row['codi']."'>Reservar</a></td>";
    echo "</tr>";
}
echo "</table>";