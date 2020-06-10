<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	 <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Mi css-->
    <link rel="stylesheet" type="text/css" href="./css/proyecto_css.css">
	
</head>

<body>
	 <div class="modal-dialog text-center justify-content-center row">
        <div class="col-sm-8 align-self-center main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="./img/avatar.png"/>
                </div>
                <form id='login' class="col-12" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="username" name="user"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" id="password" name="pass"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar Contraseña?</a>
                </div>
                <?php
    require_once 'Empleado.php';
    
    if(isset($_POST["user"]) && isset($_POST["pass"])){
        $obEmpleado= new Empleado();
        
        $obEmpleado->setuser($_POST["user"]);
        $obEmpleado->setpassword($_POST["pass"]);
        
        $resultado = $obEmpleado->IniciarSecion();
        if($resultado){
            header('Location: Mantenimiento_Usuario.php');
    } else {
        echo '<br>';
        echo '<h5 class= "text-danger"><strong> Error al iniciar sesion</h5>';
         echo '<p class= "text-danger"> Clave o Usuario incorrecto</p>';
    }        
}
    ?>
            </div>
        </div>
    </div>
   
	
</body>
</html>
