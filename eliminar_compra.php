<?php
//conexión a mysql
$link=mysqli_connect("localhost:3307","root","","miscelánea la palma");
//recoger el valor del html
$ID_Compra = $_POST["ID_Compra"];
/*consulta eliminar */
 $elimina="DELETE FROM Compra WHERE ID_Compra = '$ID_Compra' ";
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