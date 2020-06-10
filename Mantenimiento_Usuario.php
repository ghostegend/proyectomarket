<!DOCTYPE html>
<!--
Página: Mantenimiento
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
                <h1>Mantenimiento de Usuarios</h1>
                <hr>
                <a href="crearusuario.php" class="btn btn-outline-info btn-block" tabindex="-1" role="button" aria-disabled="true"><i class="fas fa-save">&nbsp;</i><strong>CREAR UN NUEVO USUARIO</strong></a>
                <br>
                <h3>Usuarios registrados:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">CEDULA</th>
                            <th scope="col">CONTRASEÑA</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'Empleado.php';
                        $obEmpleado= new Empleado();
                        $datos=$obEmpleado->mostrarTodos();
                        if($datos->num_rows >0){
                            while($registro=$datos->fetch_assoc()){
                                echo '<tr>';                             
                                echo '<td>'.$registro["id"].'</td>';
                                echo '<td>'.$registro["user"].'</td>';
                                echo '<td>'.$registro["cedula"].'</td>';                                  
                                echo '<td>'.$registro["password"].'</td>';
                                echo '<td>'.$registro["nombre"].'</td>';                              
                                if($registro['perfil']== 1){
                                    echo '<td>ACTIVO</td>';
                                } else {
                                    echo '<td>INACTIVO</td>';
                                  
                                }
                                
                                echo '<td>
                                <a href="modificarUsuario.php?id=" class="btn btn-outline-warning" role="button" aria-disabled="true"><span title="Modificar"><i class="fas fa-edit"></i></span></a> | 
                                <a href="borrarUsuario.php?id=" class="btn btn-outline-danger" role="button" aria-disabled="true"><span title="Borrar"><i class="fas fa-trash-alt"></i></span></a>
                                 
                                </td>';
                               
                                echo '</tr>';
                                
                                  
                            }
                        }
                        ?> 
                    </tbody>
                </table>
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