<h2>TICKET DE LA RESERVA</h2>
<table class="table table-striped" style="border: 1;">
    <tr>
    <th>Origen</th>
    <th>Desti</th>
    <th>Data anada</th>
    <th>Data tornada</th>
    <th>Nº places</th>
    <th>Preu vol</th>
    <th>total</th>
    <th>Data ticket</th>
    
    </tr>
<?php
while($row = $resultat->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['data_anada']."</td>";
    echo "<td>".$row['data_tornada']."</td>";
    echo "<td>".$row['n_places']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td>".$row['total']."</td>";
    echo "<td>".$row['data_ticket']."</td>";
    echo "</tr>";
}
echo "</table>";