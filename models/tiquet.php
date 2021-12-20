<?php
require_once("config/database.php");
class tiquet{
private $codi;
private $codi_reserva;
private $total;
private $data_tiquet;
  

public function insertar(){
    
    $conexion = new database();
    $sql1 = "";
    $sql = "INSERT INTO tiquet (codi_reserva, total,data_tiquet) VALUES ('$this->codi_reserva','$this->total','$this->data_tiquet')";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
public function eliminar(){
    $conexion = new database();
    $sql = "DELETE FROM tiquet WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
public function modificar(){
    $conexion = new database();
    $sql = "UPDATE tiquet SET codi_reserva = '$this->codi_reserva', total = '$this->total', data_tiquet = '$this->data_tiquet' WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
public function buscar(){
    $conexion = new database();
    $sql = "SELECT * FROM tiquet WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}
public function listar(){
    $conexion = new database();
    $sql = "SELECT * FROM tiquet";
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
 * Get the value of data_tiquet
 */
public function getDataTiquet()
{
return $this->data_tiquet;
}

/**
 * Set the value of data_tiquet
 */
public function setDataTiquet($data_tiquet): self
{
$this->data_tiquet = $data_tiquet;

return $this;
}
}
$a= new tiquet(1,1,125,"2021-10-22");
echo $a->getDataTiquet();
$a->setDataTiquet("2020-12-28");
echo "<br>". $a->getDataTiquet();

?>