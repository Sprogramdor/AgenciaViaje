<?php

require_once 'config/Conexion.php';

class ReservasModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    /* Listado de reservas */
    public function get_reservas_hotel(){
        $sql = "SELECT * FROM `reservas_hotel` 
        INNER JOIN hotel ON hotel.hotel_id = reservas_hotel.RHhotel_fk
                INNER JOIN cliente ON cliente.cliente_id = reservas_hotel.cliente_FK 
                INNER JOIN ciudades ON ciudades.ciudades_id = cliente.Ciudad_FK";  
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
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

    public function get_cliente_by_cedula($cedula) {
        $sql = "SELECT * FROM cliente 
                INNER JOIN ciudades ON ciudades.ciudades_id = cliente.Ciudad_FK  
                WHERE cliente.cedula = :cedula";
        
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        
        // Asignar el valor de la cédula al parámetro :cedula
        $stmt->bindParam(':cedula', $cedula);
        
        // Ejecutar la sentencia
        $stmt->execute();
        
        // Recuperar el resultado
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Retornar el resultado
        return $resultado;
    }
    
    public function get_cliente_id_by_cedula($cedula) {
        $sql = "SELECT cliente_id FROM cliente WHERE cedula = :cedula";
        
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        
        // Asignar el valor de la cédula al parámetro :cedula
        $stmt->bindParam(':cedula', $cedula);
        
        // Ejecutar la sentencia
        $stmt->execute();
        
        // Recuperar el resultado
        $resultado = $stmt->fetchColumn();
        
        // Retornar el resultado
        return $resultado;
    }
    

    public function insert_reserva($reserva_DAO) {
        try{
        $sql = "INSERT INTO `reserva` (`cliente_FK`, `agente_Fk`)
                VALUES (:cfk ,:afk)";
                
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data =[
            'cfk'=> $reserva_DAO->getClienteFK(),
            'afk'=> $reserva_DAO->getAgenteFK()
        ];
        // Ejecutar la sentencia
        $stmt->execute($data);
        
        if ($stmt->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
            return true;          
            }
}
    
