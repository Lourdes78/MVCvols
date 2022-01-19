<?php
require_once "models/usuari.php";
class usuariController
{

    public function mostrarusuaris()
    {
        $usuari = new usuari();
        $usuaris = $usuari->listar();
        require_once "views/usuari/mostrarusuaris.php";
    }
    public function insertarusuaris()
    {
        require_once 'views/usuari/insertarusuaris.php';
    }
    public function guardarusuaris()
    {

        $usuari = new usuari();
        $usuari->nom = $_POST['nom'];
        $usuari->contrasenya = $_POST['contrasenya'];
        $usuari->correu = $_POST['correu'];
        $usuari->adreça = $_POST['adreça'];
        $usuari->dni = $_POST['dni'];
        $usuari->telefon = $_POST['telefon'];
        $usuari->num_tarjeta = $_POST['num_tarjeta'];
        $usuari->insertar();
        header("Location: index.php?controller=usuari&action=mostrarusuaris");
    }
    public function index()
    {
        require_once 'index.php';
    }
    public function eliminar()
    {
        $usuari = new usuari();
        $usuari->codi = $_REQUEST['codi'];
        $usuari->eliminar();
        header("Location: index.php?controller=usuari&action=mostrarusuaris");
    }
    public function modificar(){
        
        $usuari = new usuari();
        $usuari->codi =$_REQUEST['codi'];
        $r= $usuari->buscar();
        $re = $r->fetch_assoc();
        require_once 'views/usuari/modificarusuari.php';
    }
    public function actualitzar(){
        $usuari = new usuari();
        $usuari->codi = $_REQUEST["codi"];
        $usuari->nom = $_REQUEST['nom'];
        $usuari->contrasenya = (md5($_REQUEST['contrasenya']));
        $usuari->correu = $_REQUEST['correu'];
        $usuari->adreça = $_REQUEST['adreça'];
        $usuari->dni = $_REQUEST['dni'];
        $usuari->telefon= $_REQUEST['telefon']; 
        $usuari->num_tarjeta = $_REQUEST['num_tarjeta']; 
     
        $usuari->modificar();

      header("Location: index.php?controller=usuari&action=mostrarusuaris");
    }
}
