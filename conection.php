<?php
/* conexión a MYSQL desde PHP */
                     //dir del servidor  usuario   contraseña  nombre de la bd
$link= mysqli_connect("localhost:3307","root","","miscelánea la palma");
// revisamos si hay conexión
if ($link === 0 ) {
    echo "no hay conexión";
} else {
  
$Nombre_Producto = $_POST["nombre"];
$Descripcion =$_POST["Descrip"];
$Precio_de_Venta =$_POST["predeven"];
$Precio_de_Compra=$_POST["predecom"];
$Cantidad_Existente=$_POST["canexis"];
$Fecha_Caducidad=$_POST["fechacadu"];
//consulta  INSERT a MYSQL
$insertar = "INSERT INTO Producto (Nombre_Producto, Descripcion, Precio_de_Venta, Precio_de_Compra, Cantidad_Existente, Fecha_Caducidad)
VALUES ('$Nombre_Producto', '$Descripcion', '$Precio_de_Venta', '$Precio_de_Compra', '$Cantidad_Existente', '$Fecha_Caducidad')";

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