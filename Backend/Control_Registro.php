<?php 
require_once '../DB/Conexion.php';

if(isset($_POST['botonReg'])){
    isset($_POST['user_name']) ? $name_user = $_POST['user_name']: $name_user = null;
    isset($_POST['user_email']) ? $email = $_POST['user_email']: $email = null;
    isset($_POST['user_pass1']) ? $pass1 = $_POST['user_pass1']: $pass1 = null;
    isset($_POST['user_pass2']) ? $pass2 = $_POST['user_pass2']: $pass2 = null;
    if($name_user && $pass1 && $pass2 && $email != null){
        if(strcmp($pass1,$pass2) == 0){

            $db = new conectar();
            $db->Evaluar_Duplicado($name_user,$email,$pass1);  
            $db->cerrar();
            
        }else{echo"<script> alert('Las contraseñas deben ser iguales');document.location.href = '../Views/Registrar_User.php';</script>";}

    }else{
        echo"<script> alert('Llenar todos los campos');document.location.href = '../Views/Registrar_User.php';</script>";

    }
}
