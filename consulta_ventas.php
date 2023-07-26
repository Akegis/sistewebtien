<?php
/* conexipon a mysql */
$link =mysqli_connect("localhost:3307","root","","miscelánea la palma");
//comprobamos conexión   7
if($link === 0){
    echo "error";
}
//consulta 
$consulta = " SELECT * FROM Ventas " ;
$resultado = $link->query($consulta);  
// encabezado de la tabla
echo '<table border="1">';
echo '<tr>';
echo '<th>ID_Venta</th>';
echo '<th>FechayHora_Venta</th>';
echo '<th>ID_Producto</th>';
echo '<th>Cantidad_Vendida</th>';
echo '<th>Precio_de_Venta</th>';
echo '<th>Total_de_Venta</th>';
echo'</tr>';
//recorremos c/u registros
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['ID_Venta'].'</td>' ; 
    echo  '<td>'.$fila['FechayHora_Venta'].'</td>' ; 
    echo  '<td>'.$fila['ID_Producto'].'</td>' ; 
    echo  '<td>'.$fila['Cantidad_Vendida'].'</td>' ; 
    echo  '<td>'.$fila['Precio_de_Venta'].'</td>' ;
    echo  '<td>'.$fila['Total_de_Venta'].'</td>' ;
echo '</tr>';
}

?>