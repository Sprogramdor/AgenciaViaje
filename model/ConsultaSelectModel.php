<?php
require_once 'config/Conexion.php';

class ConsultaSelectModel {
    private $con;
    
    public function __construct() {
        $this->con = Conexion::getConexion();
    }

      //Consultar los select option de Genero
      public function consultarCiudad(){
        //prepare
      $sql="SELECT * FROM ciudades";
      $sentencia = $this->con->prepare($sql);
        //binding parameters
        //execute
      $sentencia->execute();
        //retornar resultados
      $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
      return $resultados;
        
    }
}