<?php
//conexión a mysql
$link=mysqli_connect("localhost:3307","root","","miscelánea la palma");
//recoger el valor del html
$ID_Proveedor = $_POST["ID_Proveedor"];
/*consulta eliminar */
 $elimina="DELETE FROM Proveedor WHERE ID_Proveedor = '$ID_Proveedor' ";
    if (mysqli_query($link, $elimina)) {
        echo '<script type="text/javascript">
        alert("Delete successfully");
        window.location.href="consulta_proveedor.php";
        </script> ';
    } else {
        echo "error".mysqli_error($link);
    }
    mysqli_close($link);
?>