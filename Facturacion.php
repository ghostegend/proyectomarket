<!doctype html>
<html>
    <head> 
        <title> Factura </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="css/factcss.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="col-md-4  d-flex justify-content-start ">
           
            <a href="./Pag_Inicio.php"  class="btn btn-danger ">inicio</a>
               
       </div>
        <div class="container" >
            
            <form class="needs-validation row justify-content-center" method="POST" action="facturar.php" novalidate >
              
                <div>
                     <div  class="d-flex flex-column bd-highlight mb-3">
                 <h1 class="p-3 mb-2 bg-secondary text-white" style="text-align: center">Factura Cliente</h1>
                </div>
                      <div class="form-row">
                    <div class="col-md-4 mb-5">
                        <label for="validationTooltip03">Numero Factura</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="numero_factura">
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-2 mb-5">
                        <label for="validationTooltip04">ID Empleado</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="id_empleado" required>
                        <div class="invalid-tooltip">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="validationTooltip05">Fecha</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="fecha" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-md-6 mb-5">
                        
                        <label for="validationTooltip01">Nombre</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="nombre" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                       
                        <label for="validationTooltip02">Cedula</label>
                        <input type="text" class="form-control" id="validationTooltip02" value="0-9"  name="cedula" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-5">
                        <label for="validationTooltip03">I.V</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="iv_venta" required>
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="validationTooltip05">Sub.Total</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="sub_total" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-3 mb-5">
                        <label for="validationTooltip05">Total</label>
                        <input type="text" class="form-control" id="validationTooltip05" readonly  name="total" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                       
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                <button class="btn btn-primary" type="submit">Generar Factura</button>
                  <button class="btn btn-primary" type="submit">Limpiar</button>
                  </div>
                </div> 
            </form>
        </div>
    </body>


</html>