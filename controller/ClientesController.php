<?php
    session_start();


class ClientesController
{
    private $model;

    public function __construct()

     {
        /* $this->model = new ClientesModel(); */
    }

    public function view_clientes()
    {
        require_once 'view/Clientes/Clientes.php';
    }
    
    
}