<?php
require_once "models/ticket.php";
class ticketController{
    public function pagar(){
        echo "TIQUET PAGAT AMB ÈXIT";
    }
    public function pagartickets(){
        $ticket = new ticket();
        $ticket->codi_reserva=$_GET['codi'];
        $ticket->insertar();
        header("Location: index.php?controller=ticket&action=mostrartickets");
    }

 

    public function mostrartickets()
    {
        $ticket = new ticket();
        $resultat=  $ticket->listar();
        require_once "views/ticket/mostrartickets.php";
    } 

}

?>