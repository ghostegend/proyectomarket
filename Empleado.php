<?php

class Empleado {
     Private $ID_empleado;
     Private $user;
     Private $password;
     Private $cedula;
     Private $perfil;
    
    Public function __construct() {
        $this->ID_empleado= 0;
        $this->user="admin";
        $this->password="123";
        $this->cedula="";
        $this->nombre="";
        $this->perfil= 1;
        
    }
    public function getID_empleado(){
        return $this->ID_empleado;
    }
    public function getuser() {
        return $this->user;
    }
    public function getcedua() {
        return $this->cedula;
    }
    public function getnombre() {
        return $this->nombre;
    }
    public function getperfil() {
        return $this->perfil;
    }
    public function getpassword() {
        return $this->password;
    }
    public function setID_empleado($ID_empleadoP) {
        $this->ID_empleado= $ID_empleadoP;
    }
    public function setuser($userP) {
        $this->user=$userP;
    }
    public function setpassword($passwordP) {
        $this->password=$passwordP;
    }
    public function setcedula($cedulaP) {
        $this->cedula=$cedulaP;
    }
    public function setnombre($nombreP) {
        $this->nombre=$nombreP;
    }
    public function setperfil($perfilP) {
        $this->perfil=$perfilP;
    }
    public function IniciarSecion() {
        //esto es para comprobar si el usuario y la contra estan bien recibiendo datos
        //if($this->user =='admin' && $this->password=='123'){
       //     return true; 
      //  } else {
       //     return false;    
       // }
                       
$servername = "localhost";
$username = "root";
$password = "";
$db="minimarket";

// Crear la conexion
$conn = new mysqli($servername, $username, $password,$db);

// revisar la conexion
if ($conn->connect_error) {
  die("Coneccion fallida: " . $conn->connect_error);
}
// esto es solo para saber si se ejecuto correctamente a la base de datos 
// echo "Conectado correctamente";

$sql = "SELECT id FROM `Empleado`WHERE user= '$this->user'AND password= '$this->password';";
$result = $conn->query($sql);
if ($result->num_rows>0) {
    $conn->close();
return true;
}else {
    $conn->close();
    return false;
}
}
//metodo para crear usuario
  public function CrearUsuario(){
     $conn = new mysqli("localhost","root","","minimarket");
     
     if ($conn->connect_error) {
  die("Coneccion fallida: " . $conn->connect_error);
}
$sql= "INSERT INTO empleado(user,cedula,nombre,perfil,password)"
        ." VALUES ('$this->user','$this->cedula','$this->nombre',$this->perfil,'$this->password');";
$result = $conn->query($sql);
if($result){
    $conn->close();
    return "<br><p class='text-success'>Usuario Creado </p>";
}else{
    $conn->close();
    return "<br><p class='text-danger'>Usuario Creado </p>";
}
  }// fin del metodo crear usuario
  
    public function mostrarTodos() {
         $conn = new mysqli("localhost","root","","minimarket");
     
     if ($conn->connect_error) {
  die("Coneccion fallida: " . $conn->connect_error);
}
$sql= "SELECT id,user,cedula,password,nombre,perfil FROM empleado";
$result = $conn->query($sql);
$conn->close();
return $result;
    }

    }

?>