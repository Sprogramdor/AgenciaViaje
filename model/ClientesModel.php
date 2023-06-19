<?php

require_once 'config/Conexion.php';

class ClientesModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    
    public function get_cliente(){
        $sql = "SELECT * FROM cliente 
        INNER JOIN ciudades ON ciudades.ciudades_id = cliente.Ciudad_FK  ";  
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 
}