<?php
    session_start();

class PaquetesController
{
    private $model;

    public function __construct()

     {
       
    }
      public function new_paquetes()
    {
        require_once 'view/Paquetes/Paquetes_new.php';
    }

    public function view_paquetes()
    {
        require_once 'view/Paquetes/Paquetes_list.php';
    }
    
    
}