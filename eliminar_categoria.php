<?php
//conexión a mysql
$link=mysqli_connect("localhost:3307","root","","miscelánea la palma");
//recoger el valor del html
$ID_Categoria = $_POST["ID_Categoria"];
/*consulta eliminar */
 $elimina="DELETE FROM Categoria WHERE ID_Categoria = '$ID_Categoria' ";
    if (mysqli_query($link, $elimina)) {
        echo '<script type="text/javascript">
        alert("Delete successfully");
        window.location.href="consulta_categroria.php";
        </script> ';
    } else {
        echo "error".mysqli_error($link);
    }
    mysqli_close($link);
?>