<?php
/* conexión a MYSQL desde PHP */
                     //dir del servidor  usuario   contraseña  nombre de la bd
$link= mysqli_connect("localhost:3307","root","","miscelánea la palma");
// revisamos si hay conexión
if ($link === 0 ) {
    echo "no hay conexión";
} else {
  
$Nombre = $_POST["nombre"];
//consulta  INSERT a MYSQL
$insertar = "INSERT INTO Categoria (Nombre)
VALUES ('$Nombre')";

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