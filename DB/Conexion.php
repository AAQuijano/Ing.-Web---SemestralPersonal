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
        $sql = "INSERT INTO usuario(user,email,pass_usuario,id rol) values('".$username."','".$emailuser."','".$pass_user."',1) ";
        $process = mysqli_query($this->conn, $sql);
        if(!$process){
            //throw new Exception("Error".$sql."<br>".mysqli_error($this->conn));
            //echo "Error". $sql . "<br>" . mysqli_error($this->conn);
            echo"<script> alert('Error '".$sql."<br>".mysqli_error($this->conn).");document.location.href = '../Views/Registrar_User.php';</script>";
        }
    }
    function Data($tabla){
        $sql = "SELECT * FROM '".$tabla."'";
        $process = mysqli_query($this->conn, $sql);
        if(!$process){
            echo "Error". $sql . "<br>" . mysqli_error($this->conn);
        }
        return mysqli_fetch_all($process);
    
    }
    function Cerrar(){
        mysqli_close($this->conn);
    }
}

?>