<?php
require_once 'models/vol.php';
@session_start();
class volController
{

    public function mostrarvols()
    {

        $vol = new vol();
        $vols = $vol->listar();
        require_once 'views/vol/mostrarvols.php';
    }

    public function insertarvols()
    {
        if($_SESSION['rol']=='admin'){
        require_once 'views/vol/insertarvols.php';
        }
    }

    public function guardarvols()
    {
        if($_SESSION['rol']=='admin'){
        $vol = new vol();
        $vol->origen = $_POST['origen'];
        $vol->desti = $_POST['desti'];
        $vol->preu = $_POST['preu'];
        $today = date("YmdHis");
        $extensio = substr($_FILES['foto']['name'], strpos($_FILES['foto']['name'], "."));
        $nom = substr($_FILES['foto']['name'], 0, strpos($_FILES['foto']['name'], "."));
        $nomcomplet =  $nom . $today . $extensio;
        copy($_FILES['foto']['tmp_name'], "../../views/img/" . $nomcomplet);
        $foto = "img/" . $nomcomplet;
        $vol->foto = $nomcomplet;
        $vol->nombre_places = $_POST['nombre_places'];
        $vol->insertar();
        header("Location: index.php?controller=vol&action=mostrarvols");
        }
    }

    public function index()
    {
        require_once 'index.php';
    }
    public function eliminar()
    {
        if($_SESSION['rol']=='admin'){
        $vol = new vol();
        $vol->codi = $_REQUEST['codi'];
        $vol->eliminar();
        header("Location: index.php?controller=vol&action=mostrarvols");
        }
    }
    public function modificar()
    {
        if($_SESSION['rol']=='admin'){

        $vol = new vol();
        $vol->codi = $_REQUEST['codi'];
        $r = $vol->buscar();
        $re = $r->fetch_assoc();
        require_once 'views/vol/modificarvols.php';
        }
    }
    public function actualitzar()
    {
        if($_SESSION['rol']=='admin'){
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
}
