<?php
require_once("config/database.php");
class ticket
{
public $codi;
public $codi_reserva;
public $total;
public $data_ticket;
  


public function eliminar(){
    $conexion = new database();
    $sql = "DELETE FROM ticket WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
public function modificar(){
    $conexion = new database();
    $sql = "UPDATE ticket SET codi_reserva = '$this->codi_reserva', total = '$this->total', data_ticket = '$this->data_ticket' WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
public function buscar(){
    $conexion = new database();
    $sql = "SELECT * FROM ticket WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}
public function listar(){
    $conexion = new database();
    $sql = "SELECT origen,desti,data_anada,data_tornada,reserva.nombre_places as n_places,
    preu,total,data_ticket FROM ticket INNER JOIN reserva ON ticket.codi_reserva = reserva.codi
    INNER JOIN vol ON reserva.codi_vol = vol.codi";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}
public function insertar(){
    $conexion = new database();
    $a = $conexion->connect();
    $sqltotal = "SELECT (r.nombre_places * v.preu) as total FROM reserva as r INNER JOIN vol as v
    ON r.codi_vol = v.codi WHERE r.codi = '$this->codi_reserva'";
    $resultat = $a->query($sqltotal);
    $row = $resultat->fetch_assoc();
    $total = $row['total'];
    $sql = "INSERT INTO ticket (codi_reserva,total) VALUES ('$this->codi_reserva','$total')";
    $a->query($sql);
    $a->close();

}

/**
 * Get the value of codi
 */ 
public function getCodi()
{
return $this->codi;
}

/**
 * Set the value of codi
 *
 * @return  self
 */ 
public function setCodi($codi)
{
$this->codi = $codi;

return $this;
}

/**
 * Get the value of codi_reserva
 */
public function getCodiReserva()
{
return $this->codi_reserva;
}

/**
 * Set the value of codi_reserva
 */
public function setCodiReserva($codi_reserva): self
{
$this->codi_reserva = $codi_reserva;

return $this;
}

/**
 * Get the value of total
 */
public function getTotal()
{
return $this->total;
}

/**
 * Set the value of total
 */
public function setTotal($total): self
{
$this->total = $total;

return $this;
}

/**
 * Get the value of data_ticket
 */
public function getDataticket()
{
return $this->data_ticket;
}

/**
 * Set the value of data_ticket
 */
public function setDataticket($data_ticket): self
{
$this->data_ticket = $data_ticket;

return $this;
}
}
$a= new ticket(1,1,125,"2021-10-22");
echo $a->getDataticket();
$a->setDataticket("2020-12-28");
echo "<br>". $a->getDataticket();

?>