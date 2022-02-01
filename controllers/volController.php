<?php
require_once 'models/vol.php';
@session_start();
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
        
        $vol = new vol();        
        $vol->codi =$_REQUEST['codi'];
        $r= $vol->buscar();
        $re = $r->fetch_assoc();
        require_once 'views/vol/modificarvols.php';
    }
    public function actualitzar(){
        $vol = new vol();
        $vol->codi = $_REQUEST["codi"];
        $vol->origen = $_REQUEST['origen'];
        $vol->desti = $_REQUEST['desti'];
        $vol->preu = $_REQUEST['preu'];
        $vol->foto = $_REQUEST['foto'];
        $vol->nombre_places = $_REQUEST['nombre_places']; 
     
        $vol->modificar();

      header("Location: index.php?controller=vol&action=mostrarvols");
    }

}
