<?php
    session_start();

class VueloController
{
    private $model;

    public function __construct()

     {
        /* $this->model = new ReservasModel(); */
    }
      public function new_vuelos()
    {
        require_once 'view/Vuelo/Vuelo_new.php';
    }

    public function new_aerolinea()
    {
        require_once 'view/Vuelo/aerolinea_new.php';
    }

    public function view_vuelos()
    {
        require_once 'view/Vuelo/Vuelo_list.php';
    }
    
    
}