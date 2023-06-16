<?php
    session_start();

class HotelController
{
    private $model;

    public function __construct()

     {
        /* $this->model = new ReservasModel(); */
    }
      public function new_hoteles()
    {
        require_once 'view/Hotel/Hotel_new.php';
    }

    public function view_hoteles()
    {
        require_once 'view/Hotel/Hotel_list.php';
    }
    
    
}