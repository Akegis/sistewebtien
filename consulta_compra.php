<?php
/* conexipon a mysql */
$link =mysqli_connect("localhost:3307","root","","miscelánea la palma");
//comprobamos conexión   7
if($link === 0){
    echo "error";
}
//consulta 
$consulta = " SELECT * FROM Compra " ;
$resultado = $link->query($consulta);  
// encabezado de la tabla
echo '<table border="1">';
echo '<tr>';
echo '<th>ID_Compra </th>';
echo '<th>FechayHora_Compra </th>';
echo '<th>ID_Producto</th>';
echo '<th>Cantidad_Comprada</th>';
echo '<th>Precio_Compra</th>';
echo '<th>Total_Compra</th>';
echo'</tr>';
//recorremos c/u registros
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['ID_Compra'].'</td>' ; 
    echo  '<td>'.$fila['FechayHora_Compra'].'</td>' ; 
    echo  '<td>'.$fila['ID_Producto'].'</td>' ; 
    echo  '<td>'.$fila['Cantidad_Comprada'].'</td>' ; 
    echo  '<td>'.$fila['Precio_Compra'].'</td>' ;
    echo  '<td>'.$fila['Total_Compra'].'</td>' ;
echo '</tr>';
}

?>