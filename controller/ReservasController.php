<?php
    session_start();
/* require_once 'model/ReservasModel.php'; */
require_once 'controller/ClientesController.php';
class ReservasController
{
    private $model;

    public function __construct()

     {
        /* $this->model = new ReservasModel(); */
    }
      public function new_reservas()
    {
        require_once 'view/Reservas/Reservas_new.php'; 

    }




    public function view_reservas()
    {
        require_once 'view/Reservas/Reservas_list.php';
    }

    public function view_servicios_reservas()
    {
        require_once 'view/Reservas/Reservas_menu.php';
        
        
    }

    public function view_detalles_reservas()
    {
        require_once 'view/Reservas/Reservas_detalles.php';
    }
    public function view_factura_reservas()
    {
        require_once 'view/Reservas/Reservas_factura.php';
    }
    
    
}