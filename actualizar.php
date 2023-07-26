<?php
/* paso 1. hacer la conexión link= */
$link = mysqli_connect("localhost:3307", "root", "", "miscelánea la palma");
//verificamos la conexión
if ($link === 0) {
    die("Error " . mysqli_connect_error());
}
/*paso 2 obtener los datos del formulario */
$ID_Producto = $_POST["id"];
$Nombre_Producto = $_POST["nombre"];
$Descripcion = $_POST["Descrip"];
$Precio_de_Venta = $_POST["predeven"];
$Precio_de_Compra = $_POST["predecom"];
$Cantidad_Existente = $_POST["canexis"];
$Fecha_Caducidad = $_POST["fechacadu"];
/*paso3 consulta */
$actualizar = "UPDATE Producto SET Nombre_Producto='$Nombre_Producto', 	Descripcion='$Descripcion',
               Precio_de_Venta='$Precio_de_Venta', Precio_de_Compra='$Precio_de_Compra',
               Cantidad_Existente='$Cantidad_Existente', Fecha_Caducidad='$Fecha_Caducidad' WHERE ID_Producto='$ID_Producto'";
/*paso4 ejecutar la consulta */
if (mysqli_query($link, $actualizar)) {
    if (mysqli_affected_rows($link) > 0) {
        echo '<script type="text/javascript">
                alert("datos actualizados :D");
                window.location.href="actualizar.html";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("no existe ese registro");
                window.location.href="actualizar.html";
              </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("datos no actualizados :S");
            window.location.href="actualizar.html";
          </script>';
}
mysqli_close($link);
?>
