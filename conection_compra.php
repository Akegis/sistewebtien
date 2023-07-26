<?php
/* conexión a MYSQL desde PHP */
                     //dir del servidor  usuario   contraseña  nombre de la bd
$link= mysqli_connect("localhost:3307","root","","miscelánea la palma");
// revisamos si hay conexión
if ($link === 0 ) {
    echo "no hay conexión";
} else {
 
$FechayHora_Compra = $_POST["fecom"];
$ID_Producto =$_POST["idpro"];
$Cantidad_Comprada =$_POST["cancom"];
$Precio_Compra=$_POST["precom"];
$Total_Compra=$_POST["tocom"];

//consulta  INSERT a MYSQL
$insertar = "INSERT INTO Compra (FechayHora_Compra,ID_Producto, Cantidad_Comprada, Precio_Compra, Total_Compra)
VALUES ('$FechayHora_Compra', '$ID_Producto', '$Cantidad_Comprada', '$Precio_Compra', '$Total_Compra')";

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