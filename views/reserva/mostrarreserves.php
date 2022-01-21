<H2>RESERVES</H2>
<table class="table table-striped" style="border: 1">


    <tr>
    <th>Data d'anada</th>
    <th>Data de tornada</th>
    <th>Places reservades</th>
    <th>Modificar</th>
    <th>Eliminar</th>
    <th>Pagar</th>
    
    </tr>
<?php
while($row = $reserves->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['data_anada']."</td>";
    echo "<td>".$row['data_tornada']."</td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=reserva&action=modificar&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=reserva&action=eliminar&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=ticket&action=pagartickets&codi=".$row['codi']."'>Pagar</a></td>";
    echo "</tr>";
}
echo "</table>";
