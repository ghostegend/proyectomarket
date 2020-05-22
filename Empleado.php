<?php

class Empleado {
     Private $ID_empleado;
     Private $user;
     Private $password;
     Private $cedula;
     Private $perfil;
    
    Public function __construct($ID_empleadoP,$userP,$passwordP,$cedulaP,$nombreP,$perfilP) {
        $this->ID_empleado= $ID_empleadoP;
        $this->user=$userP;
        $this->password=$passwordP;
        $this->cedula=$cedulaP;
        $this->nombre=$nombreP;
        $this->perfil=$perfilP;
        
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
}
?>