<?php
/* conexión a MYSQL desde PHP */
                     //dir del servidor  usuario   contraseña  nombre de la bd
$link= mysqli_connect("localhost:3307","root","","miscelánea la palma");
// revisamos si hay conexión
if ($link === 0 ) {
    echo "no hay conexión";
} else {
  
    $Nombre_Proveedor = $_POST["nombre"];
    $Direccion = $_POST["direc"];
    $Telefono = $_POST["tele"];

//consulta  INSERT a MYSQL
$insertar = "INSERT INTO    Proveedor (Nombre_Proveedor, Direccion, Telefono)
VALUES ('$Nombre_Proveedor', '$Direccion', '$Telefono')";

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