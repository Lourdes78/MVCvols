<?php
require_once "models/usuari.php";
class volController{

    public function mostrarusuaris(){
        $vol= new vol();
        $vols = $vol->listar();
        require_once "views/usuari/mostrarusuaris.php";

    }
    public function guardarusuaris(){
        $vol= new vol();
        $vols = $vol->insertar();
        require_once "views/usuari/insertarusuaris.php";

    }

}
?>