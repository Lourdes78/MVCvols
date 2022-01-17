<?php
require_once("config/database.php");
class ticket{
private $codi;
private $codi_reserva;
private $total;
private $data_ticket;
  

public function insertar(){
    
    $conexion = new database();
    $sql1 = "";
    $sql = "INSERT INTO ticket (codi_reserva, total,data_ticket) VALUES ('$this->codi_reserva','$this->total','$this->data_ticket')";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
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
    $sql = "SELECT * FROM ticket";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}
public function total(){
    $conexion = new database();
    $sql = "SELECT (r.nombre_places * v.preu) as total FROM `ticket` as t INNER JOIN reserva as r ON t.codi_reserva = r.codi INNER JOIN vol as v ON r.codi_vol = v.codi";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;

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