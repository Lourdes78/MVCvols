<table style="border: 1;">
    <tr>
    <th>nom</th>
    <th>contrasenya</th>
    <th>correu</th>
    <th>adreça</th>
    <th>dni</th>
    <th>telefon</th>
    <th>num_tarjeta</th>
    <th>modificar</th>
    <th>eliminar</th>
    
    </tr>
<?php
while($row = $vols->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['contrasenya']."</td>";
    echo "<td>".$row['correu']."</td>";
    echo "<td>".$row['adreça']."</td>";
    echo "<td>".$row['dni']."</td>";
    echo "<td>".$row['telefon']."</td>";
    echo "<td>".$row['num_tarjeta']."</td>";
    echo "<td><a href='index.php?page=vol&action=modificar&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?page=vol&action=eliminar&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";