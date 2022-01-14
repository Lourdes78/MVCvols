<?php
require_once 'models/reserva.php';
class reservaController{

    public function mostrarreserves(){
          
        $reserva = new reserva();
        $reserves = $reserva->listar();       
        require_once 'views/reserva/mostrarreserves.php';
    }
    public function insertarreserves(){
        require_once 'views/reserva/insertarreserves.php';
    }
 

    public function guardarreserves(){

        $reserva = new reserva();
        $reserva->codi_vol= $_REQUEST['codi_vol'];
        $reserva->codi_usuari = $_REQUEST['codi_usuari'];
        $reserva->data_anada = $_REQUEST['data_anada'];
        $reserva->data_tornada = $_REQUEST['data_tornada'];
        $reserva->nombre_places = $_REQUEST['nombre_places'];
        $reserva->insertar();
       header("Location: index.php?controller=reserva&action=mostrarreserves");
    }
    public function index()
    {
        require_once 'index.php';
    }
    public function eliminar()
    {
       $reserva = new reserva();
       $reserva->codi = $_REQUEST['codi'];
       $reserva->eliminar();
       header("Location: index.php?controller=reserva&action=mostrarreserves");
    }
    public function modificar(){
        $reserva = new reserva();
        $reserva->codi=$_REQUEST['codi'];
        $r = $reserva->buscar();
        $row = $r->fetch_assoc();
        require_once 'views/reserva/mofificarreserves.php';
    }
    public function actualitzar(){
        $reserva = new reserva();
        $reserva->codi= $_REQUEST['codi'];
        $reserva->codi_vol= $_REQUEST['codi_vol'];
        $reserva->codi_usuari = $_REQUEST['codi_usuari'];
        $reserva->data_anada = $_REQUEST['data_anada'];
        $reserva->data_tornada = $_REQUEST['data_tornada'];
        $reserva->nombre_places = $_REQUEST['nombre_places'];
        $reserva->modificar();
       header("Location: index.php?controller=reserva&action=mostrarreserves");

    }
}