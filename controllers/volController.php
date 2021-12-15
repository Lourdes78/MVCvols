<?php
require_once "models/vol.php";
class volController{

    public function mostrarvols(){
        $vol= new vol();
        $vols = $vol->listar();
        require_once "views/vol/mostrarvols.php";

    }
    public function insertarvols(){
        $vol= new vol();
        $vols = $vol->insertar();
        require_once "views/vol/insertarvols.php";

    }

}
?>