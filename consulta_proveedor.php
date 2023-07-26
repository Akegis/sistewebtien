<?php
/* conexipon a mysql */
$link =mysqli_connect("localhost:3307","root","","miscelánea la palma");
//comprobamos conexión   7
if($link === 0){
    echo "error";
}
//consulta 
$consulta = " SELECT * FROM Proveedor " ;
$resultado = $link->query($consulta);  
// encabezado de la tabla
echo '<table border="1">';
echo '<tr>';
echo '<th>ID_Proveedor</th>';
echo '<th>Nombre_Proveedor</th>';
echo '<th>Direccion</th>';
echo '<th>Telefono</th>';
echo'</tr>';
//recorremos c/u registros
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['ID_Proveedor'].'</td>' ; 
    echo  '<td>'.$fila['Nombre_Proveedor'].'</td>' ; 
    echo  '<td>'.$fila['Direccion'].'</td>' ; 
    echo  '<td>'.$fila['Telefono'].'</td>' ; 
echo '</tr>';
}

?>