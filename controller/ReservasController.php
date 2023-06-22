<?php
    session_start();
require_once 'model/ReservasModel.php'; 
require_once 'controller/ClientesController.php';
require_once 'model/Dto/reservashotel.php';


class ReservasController
{
    private $model;

   public $idC;
    public function __construct()

     {
         $this->model = new ReservasModel(); 
    }

    public function opcion_reservas()
    {
        require_once 'view/Reservas/Reservas_opcion.php'; 

    }
    public function existente_reservas()
    {
         $cModel = new ClientesModel();
         $cliente = $cModel->get_cliente();
        require_once 'view/Reservas/Reservas_cliente.php'; 

    }

      public function new_reservas()
    {
        
        require_once 'view/Reservas/Reservas_new.php'; 

    }

    public function view_servicios_reservas()
    {
        if(isset($_POST['cliente_existente']) && !empty($_POST['cliente_existente'])){
            $idC=$_SESSION['idCliente'] = $_POST['cliente_existente'] ;

        }else{
            $idC=$_SESSION['idCliente'] = $_GET['idC'] ;
        }
        
        
        
        require_once 'view/Reservas/Reservas_menu.php';
          
    }


    public function new_reservaH()
    {
        $reservahotel = new reservashotel();
        $valoridc = $_SESSION['idCliente'];
        $reservahotel ->setClienteFK($valoridc); 
        $reservahotel ->setRHhotelFk($_GET['hid']);// ID hotel */
         
        

        
       

        $exito = $this->model->insert_reservaH($reservahotel);
    if (!$exito) {
        $msj = "Ingrese los datos correctamente";
        $icon = 'error';
       // header('Location:index.php?c=Reservas&a=view_servicios_reservas&msj='.$msj);
         
      }

      else{
       
        $msj = 'Guardado exitosamente';
        $icon ='success';
         require_once 'view/Reservas/Reservas_factura.php';
      }

      $_SESSION['m_crear_usuario'] = $msj;
      $_SESSION['m_icon_interesado'] = $icon;
      
      

    }

    public function new_reservaV()
    {
       /*$reservahotel = new servicios_reservas_hotel();
        $reservahotel ->setRreservaFK($_POST['nombre']); 
        $reservahotel ->setHotelFK($_GET['hid']);// ID hotel */

        //Crear objeto reserva hotel  
        //cambiar directamente a factura wuw
        require_once 'view/Reservas/Reservas_factura.php';

    }

    public function new_reservaP()
    {
       /*$reservahotel = new servicios_reservas_hotel();
        $reservahotel ->setRreservaFK($_POST['nombre']); 
        $reservahotel ->setHotelFK($_GET['hid']);// ID hotel */

        //Crear objeto reserva hotel  
        //cambiar directamente a factura wuw
        require_once 'view/Reservas/Reservas_factura.php';

    }



    

    public function servicios_reservas_hotel()//AKI
    {//Mostrar todos los Servicios disponibles 

        $idC=$_GET['idC'] ;

        require_once 'view/Hotel/Hotel_listC.php';


          
    }
    public function servicios_reservas_vuelo()
    {//Mostrar todos los Servicios disponibles 
        require_once 'view/Vuelo/Vuelo_listC.php';
          
    }

    public function servicios_reservas_paquete()
    {//Mostrar todos los Servicios disponibles 
        require_once 'view/Paquetes/Paquete_listC.php';
          
    }


     public function view_reservas()
    {
        require_once 'view/Reservas/Reservas_list.php';
    }

    public function Lista_reservas_hotel(){
    
        $datos=$this->model->get_reservas_hotel();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["Apellido"];
            $sub_array[] = $row["cedula"];  
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["valoracion"];
            $sub_array[] = $row["direccion"];
            $sub_array[] = $row["precioNoche"];
            $sub_array[] = $row["nombreCiudad"];
           
           $data[]=$sub_array; 
           
         
        }
        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
           /*  var_dump($results); */
        echo $json = json_encode($results); 
    
     
    }





    public function view_factura_reservas()
    {
        require_once 'view/Reservas/Reservas_factura.php';
    }
    
    
}