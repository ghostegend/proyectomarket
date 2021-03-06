<!doctype html>

<html>
   <head> 
    <title> Detalle</title>
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
            
            <form class="needs-validation row justify-content-center"  novalidate >
              
                <div>
                     <div  class="d-flex flex-column bd-highlight mb-3">
                 <h1 class="p-3 mb-2 bg-secondary text-white" style="text-align: center">Detalle Cliente</h1>
                </div>
                      <div class="form-row">
                    <div class="col-md-4 mb-5">
                        <label for="validationTooltip03"> ID Factura</label>
                        <input type="text" class="form-control" id="validationTooltip03" required>
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-2 mb-5">
                        <label for="validationTooltip04">ID Producto</label>
                        <input type="text" class="form-control" id="validationTooltip04" required>
                        <div class="invalid-tooltip">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="validationTooltip05">No Detalle</label>
                        <input type="text" class="form-control" id="validationTooltip05" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-5">
                        <label for="validationTooltip05">Cantidad</label>
                        <input type="text" class="form-control" id="validationTooltip05" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-3 mb-5">
                        <label for="validationTooltip05">Monto</label>
                        <input type="text" class="form-control" id="validationTooltip05" readonly required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                       
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                <button class="btn btn-primary" type="submit">Generar Detalle</button>
                  <button class="btn btn-primary" type="submit">Limpiar</button>
                  </div>
                </div> 
            </form>
        </div>
</body>


</html>