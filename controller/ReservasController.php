<?php
    session_start();
/* require_once 'model/ReservasModel.php'; */

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
    
    
}