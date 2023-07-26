<?php
/* paso 1. hacer la conexión link= */
$link = mysqli_connect("localhost:3307", "root", "", "miscelánea la palma");
//verificamos la conexión
if ($link === 0) {
    die("Error " . mysqli_connect_error());
}
/*paso 2 obtener los datos del formulario */
$ID_Compra = $_POST["id"];
$FechayHora_Compra = $_POST["fecom"];
$ID_Producto =$_POST["idpro"];
$Cantidad_Comprada =$_POST["cancom"];
$Precio_Compra=$_POST["precom"];
$Total_Compra=$_POST["tocom"];

/*paso3 consulta */
$actualizar = "UPDATE Compra SET FechayHora_Compra='$FechayHora_Compra',ID_Producto='$ID_Producto',
              Cantidad_Comprada='$Cantidad_Comprada', Precio_Compra='$Precio_Compra',
              Total_Compra ='$Total_Compra' WHERE ID_Compra='$ID_Compra'";

/*paso4 ejecutar la consulta */
if (mysqli_query($link, $actualizar)) {
    if (mysqli_affected_rows($link) > 0) {
        echo '<script type="text/javascript">
                alert("datos actualizados :D");
                window.location.href="actualizar_compra.html";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("no existe ese registro");
                window.location.href="actualizar_compra.html";
              </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("datos no actualizados :S");
            window.location.href="actualizar_compra.html";
          </script>';
}
mysqli_close($link);
?>
