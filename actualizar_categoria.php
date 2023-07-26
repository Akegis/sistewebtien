<?php
/* paso 1. hacer la conexión link= */
$link = mysqli_connect("localhost:3307", "root", "", "miscelánea la palma");
//verificamos la conexión
if ($link === 0) {
    die("Error " . mysqli_connect_error());
}
/*paso 2 obtener los datos del formulario */
$ID_Categoria = $_POST["id"];
$Nombre= $_POST["nombre"];
/*paso3 consulta */
$actualizar = "UPDATE Categoria SET Nombre='$Nombre' WHERE ID_Categoria='$ID_Categoria'";
/*paso4 ejecutar la consulta */
if (mysqli_query($link, $actualizar)) {
    if (mysqli_affected_rows($link) > 0) {
        echo '<script type="text/javascript">
                alert("datos actualizados :D");
                window.location.href="actualizar_categoria.html";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("no existe ese registro");
                window.location.href="actualizar_categoria.html";
              </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("datos no actualizados :S");
            window.location.href="actualizar_categoria.html";
          </script>';
}
mysqli_close($link);
?>

