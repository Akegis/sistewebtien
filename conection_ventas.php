<?php
/* conexión a MYSQL desde PHP */
                     //dir del servidor  usuario   contraseña  nombre de la bd
$link= mysqli_connect("localhost:3307","root","","miscelánea la palma");
// revisamos si hay conexión
if ($link === 0 ) {
    echo "no hay conexión";
} else {
  
    $FechayHora_Venta = $_POST["feha"];
    $ID_Producto = $_POST["idpro"];
    $Cantidad_Vendida = $_POST["canven"];
    $Precio_de_Venta = $_POST["preven"];
    $Total_de_Venta = $_POST["toven"];
//consulta  INSERT a MYSQL
$insertar = "INSERT INTO Ventas ( FechayHora_Venta, ID_Producto, Cantidad_Vendida, Precio_de_Venta, Total_de_Venta) 
VALUES ( '$FechayHora_Venta', '$ID_Producto', '$Cantidad_Vendida', '$Precio_de_Venta', '$Total_de_Venta')";
//corroborar 
if  (mysqli_query($link,$insertar )){
    echo"datos insertados exitosamente";
}else {
    echo "error: ".mysqli_error($link);
}
//cerramos conexión
mysqli_close($link);
}
?>