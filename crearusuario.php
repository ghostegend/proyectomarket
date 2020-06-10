<!DOCTYPE html>
<!--
Página: Crear Usuario
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Práctica: Sistema de Usuarios Básico</title>
        <!-- CSS Font Awesome -->
        <link rel="stylesheet" href="css/all.css">
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <i class="fas fa-laptop-code"></i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsPractica" aria-controls="navbarsPractica" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div class="collapse navbar-collapse" id="navbarsPractica">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Mantenimiento_Usuario.php">Mantenimiento</a>
                    </li>
                </ul>
            </div>
            <!-- Fin Opciones del menú -->
        </nav>
        <!-- Fin Barra de navegación -->

        <br>

        <!-- Contenido de la página -->
        <main role="main">
            <div class="container">
                <a href="crearusuario.php" class="nav-link text-info text-right"><i class="fas fa-arrow-left"></i>&nbsp;<strong>Regresar</strong></a>
                <h1>Mantenimiento de Usuarios</h1>
                <hr>
                <h3>Complete los datos para registrar un nuevo usuario:</h3>
                <!-- Formulario para modificar al usuario -->
                <form action="crearusuario.php" method="POST">
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" name="user" value="" required>
                    </div>
                     <div class="form-group">
                        <label for="user">Cedula:</label>
                        <input type="text" class="form-control" name="cedula" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña:</label>
                        <input type="text" class="form-control" name="pass" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" name="name" value="" required>
                    </div>
                    <button type="submit" class="btn btn-success">Registrar</button>   
                </form>
                <!-- Fin Formulario para modificar al usuario -->
                <?php
                if(isset($_POST["user"])&& isset($_POST["cedula"]) && isset($_POST["pass"]) && isset($_POST["name"])){
                    require_once 'Empleado.php';
                    $obEmpleado = new Empleado();
                    $obEmpleado->setuser ($_POST["user"]);
                    $obEmpleado->setcedula ($_POST["cedula"]);
                    $obEmpleado->setpassword ($_POST["pass"]);
                    $obEmpleado->setnombre ($_POST["name"]);
                    $obEmpleado->setperfil (1);
                    $resultado= $obEmpleado->CrearUsuario();
                    echo $resultado;
                }
                ?>
            </div>
        </main>
        <!-- Fin Contenido de la página -->

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- Popper -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!-- JS Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>        
    </body>
</html>