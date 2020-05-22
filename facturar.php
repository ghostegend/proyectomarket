<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
               
$servername = "localhost";
$username = "root";
$password = "";
$db="minimarket";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(isset($_POST["numero_factura"])&& isset ($_POST["id_empleado"]) && isset ($_POST["fecha"]) && isset ($_POST["nombre"])&& 
        isset ($_POST["cedula"]) &&  isset ($_POST["vp_venta"])&& isset($_POST["sub_total"])&& isset($_POST["total"])){
    
        }
$numero_factura= $_POST["numero_factura"];  
$fecha= $_POST["fecha"];
$cedula= $_POST["cedula"];
$iv_venta=$_POST["iv_venta"];
$sub_total=$_POST["sub_total"];
$total=$_POST["total"];
$name=$_POST["nombre"];


$insertfactura = "INSERT INTO `factura` ( `ID`,`FECHA`,`CEDULA`,`IMPUESTO`,`SUBTOTAL`,`TOTAL`,`NOMBRE`)"
        . " VALUES ('$numero_factura','$fecha','$cedula','$iv_venta','$sub_total','$total','$name')";
$result = $conn->query($insertfactura);
if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . $conn->error;
exit;
}

mysqli_free_result($result);
      
        ?>
    </body>
</html>
