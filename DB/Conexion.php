<?php 
class conectar{
    private $host;
    private $username;
    private $datab;
    private $conn;
    //private $process;
    private $pass;
    function __construct(){
        $this->host = "localhost";
        $this->username = "root";
        $this->pass = ""; 
        $this->datab = "pra-ingweb";
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->datab);
        if(!$this->conn){
            die('Error connecting: ' . mysqli_connect_error());
        }

    }

    function Insertar($username,$emailuser,$pass_user){
        $db = new conectar();
        $tabla = $db->Data('rol');  
        $db->cerrar();
        $sql = "INSERT INTO usuario(user,email,pass_usuario,id_rol) values('".$username."','".$emailuser."','".$pass_user."',".$tabla[0][0].")";
        $process = mysqli_query($this->conn, $sql);
        if(!$process){
            //throw new Exception("Error".$sql."<br>".mysqli_error($this->conn));
            //echo "Error". $sql . "<br>" . mysqli_error($this->conn);
            echo"<script> alert('Error '".$sql."<br>".mysqli_error($this->conn).");document.location.href = '../Views/Registrar_User.php';</script>";
        }else{
            echo"<script> alert('Registro exitoso');document.location.href = '../Views/Login.php';</script>";
        }
    }
    function Data($tabla){
        $sql = "SELECT * FROM $tabla";
        $process = mysqli_query($this->conn, $sql);
        if(!$process){
            echo "Error". $sql . "<br>" . mysqli_error($this->conn);
        }
        return mysqli_fetch_all($process);
    
    }

    function Evaluar_Duplicado($name,$email,$pass){
        $sql = "SELECT COUNT(*) as acu from usuario where user = '$name'";
        $process = mysqli_query($this->conn,$sql);
        $arrai = mysqli_fetch_array($process);
        if($arrai['acu'] == 0){
            $db = new conectar();
            $db->Insertar($name,$email,$pass);  
            $db->cerrar();
        }else{
            echo"<script> alert('Nombre usuario no disponible');document.location.href = '../Views/Registrar_User.php';</script>";
        }


    }

    function Logear($name,$pass){
        $sql = "SELECT * FROM usuario WHERE user = '$name' and pass_usuario = '$pass'";
        $process = mysqli_query($this->conn,$sql);
        $data = mysqli_fetch_object($process);
        if($data){
            return $data;

        }else{
            echo"<script> alert('Error en login');document.location.href = '../Views/Login.php';</script>";
        }

    }

    function Cerrar(){
        mysqli_close($this->conn);
    }
}


/*$db = new conectar();
$tabla = $db->Data('rol');
print_r($tabla[0][0]);

$db->Evaluar_Duplicado('alxs05','antonio.quijano@gmail.com','12345678');

$db->Cerrar();*/

