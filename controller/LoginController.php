<?php
session_start();

require_once 'model/LoginModel.php';

class LoginController {
      private $model;
      


  public function __construct(){
    $this->model = new LoginModel();
  }

  public function login(){
    require_once 'view/login.php';
  } 

  public function Agente(){
    $errores = '';

    if(!empty($_POST['correo']) && !empty($_POST['pass'])){

        $correo = htmlentities($_POST['correo']);
        $pass = htmlentities($_POST['pass']);
   
        $agente = $this->model->Agente_list($correo, $pass);


        if(isset($agente)){
         
          $_SESSION['user']= $correo;
          $_SESSION['agente'] = $agente['nombre'];
          $_SESSION['apellido'] = $agente['Apellido'];
          $_SESSION['id'] = $agente['agente_id'];
          $_SESSION['login'] = true;

      /*   header("Location:index.php?c=Home&a=mostrarHome"); */
        require_once 'view/Home/Home.php';
          }   
          
        else {
         
            $errores .= 'La contraseña o correo son incorrecto';
            $_SESSION['login'] = false; 
            include 'view/login.php';
        }
      }
      else{
          $errores .= 'No puede quedar datos vacios...';
          $_SESSION['login'] = false; 
          include 'view/login.php';
        }

      }

      public function salirLogin(){
        
        $this->model->LoginCerrar();
        
        header('Location:index.php?c=login&a=login');
        
      }

   

      



}