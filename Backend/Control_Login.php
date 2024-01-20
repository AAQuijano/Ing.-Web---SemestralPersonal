<?php 
require_once 'DB/Conexion.php';

if(isset($_POST['botonLogin'])){
    isset($_POST['user_name']) ? $user = $_POST['user_name']:$user = null;
    isset($_POST['user_pass']) ? $pass = $_POST['user_pass']:$pass = null;

    if($user && $pass != null){
        
    }

}


?>