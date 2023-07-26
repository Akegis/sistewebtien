<?php
/* paso 1. hacer la conexión link= */
$link = mysqli_connect("localhost:3307", "root", "", "miscelánea la palma");
//verificamos la conexión
if ($link === 0) {
    die("Error " . mysqli_connect_error());
}
/*paso 2 obtener los datos del formulario */
    $ID_Venta = $_POST["id"];
    $FechayHora_Venta = $_POST["feha"];
    $ID_Producto = $_POST["idpro"];
    $Cantidad_Vendida = $_POST["canven"];
    $Precio_de_Venta = $_POST["preven"];
    $Total_de_Venta = $_POST["toven"];
/*paso3 consulta */
$actualizar = "UPDATE Ventas SET FechayHora_Venta='$FechayHora_Venta', 	ID_Producto='$ID_Producto',
              Cantidad_Vendida='$Cantidad_Vendida', Precio_de_Venta='$Precio_de_Venta',
              Total_de_Venta ='$Total_de_Venta ' WHERE ID_Venta='$ID_Venta'";
/*paso4 ejecutar la consulta */
if (mysqli_query($link, $actualizar)) {
    if (mysqli_affected_rows($link) > 0) {
        echo '<script type="text/javascript">
                alert("datos actualizados :D");
                window.location.href="actualizar_ventas.html";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("no existe ese registro");
                window.location.href="actualizar_ventas.html";
              </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("datos no actualizados :S");
            window.location.href="actualizar_ventas.html";
          </script>';
}
mysqli_close($link);
?>
