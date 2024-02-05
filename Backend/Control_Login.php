<?php
require_once '../DB/Conexion.php';
session_start();

if(isset($_POST['botonLogin'])){
    isset($_POST['user_name']) ? $user = $_POST['user_name']:$user = null;
    isset($_POST['user_pass']) ? $pass = $_POST['user_pass']:$pass = null;

    if($user && $pass != null){
         
        $db = new conectar();
        $datos = $db->Logear($user,$pass);
        $db->Cerrar();
        $_SESSION['id'] = $datos->id_user;
        $_SESSION['rol'] = $datos->id_rol;
        $_SESSION['usuario'] = $datos->user;

        if($_SESSION['rol'] == 1){
            header("Location: ../Views/Home.php");
        }else if($_SESSION['rol'] == 2){
            header("Location: ../Views/Home_admin.php");

        }  
        
    }

}else{
    echo"<script> alert('Llenar todos los campos');document.location.href = '../Views/Login.php';</script>";

}
