<?php
    session_start();
    require_once 'model/ClientesModel.php';
    require_once 'model/Dto/cliente.php';
    require_once 'model/ReservasModel.php';
    require_once 'model/Dto/reserva.php';


class ClientesController
{
    private $model;
    private $modelR;
    public function __construct()

     {
         $this->model = new ClientesModel(); 
         $this->modelR = new ReservasModel(); 
    }

    public function view_clientes()
    {
        require_once 'view/Clientes/Clientes.php';
    }


public function new_cliente(){
    $cliente_DAO = new cliente();
    $cliente_DAO->setNombre($_POST['nombre']);
    $cliente_DAO->setApellido($_POST['Apellido']);
    $cliente_DAO->setCorreo($_POST['Correo']);
    $cliente_DAO->setCedula($_POST['cedula']);
    $cliente_DAO->setTelefono($_POST['telefono']);
    $cliente_DAO->setDireccion($_POST['Direccion']);
    $cliente_DAO->setCiudadFk($_POST['Ciudad_FK']);

    $exito = $this->model->insert_cliente($cliente_DAO);
    if (!$exito) {
        $msj = "Ingrese los datos correctamente";
        $icon = 'error';
       // header('Location:index.php?c=Reservas&a=view_servicios_reservas&msj='.$msj);

      }

      else{
        $id=$this->model->get_cliente_id_by_cedula($_POST['cedula']);
        $msj = 'Guardado exitosamente';
        $icon ='success';
        $reserva_DAO= new reserva();
        $reserva_DAO->setClienteFK($id);
        $reserva_DAO->setAgenteFK($_SESSION['id']);
        //crear reserva 
        $exito = $this->modelR->insert_reserva($reserva_DAO);
        
        if (!$exito) {
            $msj = "Fallo crear reserva";
            $icon = 'error';
           // header('Location:index.php?c=Reservas&a=view_servicios_reservas&msj='.$msj);
    
          }else{

            header('Location:index.php?c=Reservas&a=view_servicios_reservas&id='.$id);
          }


        
      }

      $_SESSION['m_crear_usuario'] = $msj;
      $_SESSION['m_icon_interesado'] = $icon;
      var_dump($msj);
      

    //require_once 'view/Reservas/Reservas_servicios.php';
}



    public function Lista_cliente(){
    
        $datos=$this->model->get_cliente();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["Apellido"];
            $sub_array[] = $row["Correo"];
            $sub_array[] = $row["cedula"];
            $sub_array[] = $row["Direccion"];
            $sub_array[] = $row["telefono"];
            $sub_array[] = $row["nombreCiudad"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                <a class="btn btn-alt-primary" 
                href="index.php?c=Clientes&a=view_Editar&cliente_edit='.$row['cliente_id'].'">
                    <i class="fa fa-edit mr-5"></i>&nbsp;Editar
                </a>
                <a class="btn btn-alt-danger mr-5 mb-5 eliminar" 
                href="index.php?c=Clientes&a=Eliminar_cliente&id='.$row['cliente_id'].'" data-id="'.$row['cliente_id'].'">
                    <i class="fa fa-remove mr-5"></i>&nbsp;Borrar
                </a> 
            </div>';
           
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
    
    
}