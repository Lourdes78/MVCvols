<?php
require_once "models/usuari.php";
class ticketController{
    public function pagar(){
        echo "TIQUET PAGAT AMB ÈXIT";
    }
    public function mostrartickets()
    {
        $ticket = new ticket();
        $tickets=  $ticket->listar();
        require_once "views/ticket/mostrartickets.php";
    } 

}

?>