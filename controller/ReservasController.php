<?php
    session_start();
/* require_once 'model/ReservasModel.php'; */
require_once 'controller/ClientesController.php';
class ReservasController
{
    private $model;

    public function __construct()

     {
         //$this->model = new CLientesController(); 
    }

    public function opcion_reservas()
    {
        require_once 'view/Reservas/Reservas_opcion.php'; 

    }
    public function existente_reservas()
    {
        require_once 'view/Reservas/Reservas_cliente.php'; 

    }

      public function new_reservas()
    {
        
        require_once 'view/Reservas/Reservas_new.php'; 

    }

    public function new_reservaH()
    {
        $reservahotel = new servicios_reservas_hotel();
        $reserva->setRreservaFK($_POST['nombre']); 
        $reserva->setHotelFK($_GET['hid']);// ID hotel 

        //Crear objeto reserva hotel  
        //cambiar directamente a factura wuw
        require_once 'view/Reservas/Reservas_new.php'; 

    }


    public function view_servicios_reservas()
    {
       
        require_once 'view/Reservas/Reservas_menu.php';
          
    }

    public function servicios_reservas_hotel()//AKI
    {//poner crear una reserva hotel uwu 


        require_once 'view/Hotel/Hotel_listC.php';


          
    }
    public function servicios_reservas_vuelo()
    {
        require_once 'view/Reservas/Reservas_vuelo.php';
          
    }

    public function servicios_reservas_paquete()
    {
        require_once 'view/Reservas/Reservas_paquete.php';
          
    }


     public function view_reservas()
    {
        require_once 'view/Reservas/Reservas_list.php';
    }


  /*   public function view_detalles_reservas()
    {
        require_once 'view/Reservas/Reservas_detalles.php';
    }  */

    public function view_factura_reservas()
    {
        require_once 'view/Reservas/Reservas_factura.php';
    }
    
    
}