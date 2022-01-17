<table style="border: 1;">
    <tr>
    <th>codi</th>
    <th>codi_reserva</th>
    <th>data_tiquet</th>
    <th>Total</th>
    <th>Pagar</th>
    
    </tr>
<?php
while($row = $ticket->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi']."</td>";
    echo "<td>".$row['codi_reserva']."</td>";
    echo "<td>".$row['data_tiquet']."</td>";
    echo "<td>".$row['Total']."</td>";
    echo "<td><a href='index.php?controller=ticket&action=pagar&codi=".$row['codi']."'>Pagar</a></td>";
    echo "</tr>";
}
echo "</table>";