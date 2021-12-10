<?php
class tiquet{
private $codi;
private $codi_reserva;
private $total;
private $data_tiquet;
  
public function __construct($codi,$codi_reserva,$total,$data_tiquet){
    $this-> codi = $codi;
    $this-> codi_reserva = $codi_reserva;
    $this -> total = $total;
    $this -> data_tiquet = $data_tiquet;

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