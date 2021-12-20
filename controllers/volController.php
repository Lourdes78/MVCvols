<?php
require_once 'models/vol.php';
class volController{

    public function mostrarvols(){
          
        $vol = new vol();
        $vols = $vol->listar();       
        require_once 'views/vol/mostrarvols.php';
    }

    public function insertarvols(){
        require_once 'views/vol/insertarvols.php';
    }

    public function guardarvols(){
        $vol = new vol();
        $vol->origen = $_POST['origen'];
        $vol->desti = $_POST['desti'];
        $vol->preu = $_POST['preu'];
        $vol->foto = $_POST['foto'];
        $vol->nombre_places = $_POST['nombre_places'];
        $vol->insertar();
        header("Location: index.php?controller=vol&action=mostrarvols");
    }

    public function index(){
        require_once 'index.php';
    }
    public function eliminar(){
        $vol = new vol();
        $vol->codi =$_REQUEST['codi'];
         $vol->eliminar();
            header("Location: index.php?controller=vol&action=mostrarvols");
    }
    public function modificar(){
        require_once 'views/vol/modificarvols.php';
        $vol = new vol();
        $vol->codi =$_REQUEST['codi'];
        $r= $vol->buscar();
        $r->fetch_assoc();
    }
    public function actualitzar(){
        $vol = new vol();
        $vol->origen = $_REQUEST['origen'];
        $vol->desti = $_REQUEST['desti'];
        $vol->preu = $_REQUEST['preu'];
        $vol->foto = $_REQUEST['foto'];
        $vol->nombre_places = $_REQUEST['nombre_places']; 
        $re= $vol->buscar();  
        $r=$vol->modificar();
        $re->fetch_assoc();

        header("Location: index.php?controller=vol&action=mostrarvols");
    }

}
