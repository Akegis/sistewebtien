<?php
//conexión a mysql
$link=mysqli_connect("localhost:3307","root","","miscelánea la palma");
//recoger el valor del html
$ID_Producto = $_POST["ID_Producto"];
/*consulta eliminar */
 $elimina="DELETE FROM Producto WHERE ID_Producto = '$ID_Producto' ";
    if (mysqli_query($link, $elimina)) {
        echo '<script type="text/javascript">
        alert("Delete successfully");
        window.location.href="consulta.php";
        </script> ';
    } else {
        echo "error".mysqli_error($link);
    }
    mysqli_close($link);
?>