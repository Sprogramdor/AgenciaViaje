<?php
    session_start();
    require_once 'model/ClientesModel.php';


class ClientesController
{
    private $model;

    public function __construct()

     {
         $this->model = new ClientesModel(); 
    }

    public function view_clientes()
    {
        require_once 'view/Clientes/Clientes.php';
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