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
        $reserva->data_anada = $_REQUEST['data_anada'];
        $reserva->data_tornada = $_REQUEST['data_tornada'];
        $reserva->nombre_places = $_REQUEST['nombre_places'];
        $reserva->insertar();
        header("Location: index.php?controller=reserva&action=mostrarreserves");
    }
}