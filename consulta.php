<?php
/* conexipon a mysql */
$link =mysqli_connect("localhost:3307","root","","miscelánea la palma");
//comprobamos conexión   7
if($link === 0){
    echo "error";
}
//consulta 
$consulta = " SELECT * FROM Producto " ;
$resultado = $link->query($consulta);  
// encabezado de la tabla
echo '<table border="1">';
echo '<tr>';
echo '<th>ID_producto</th>';
echo '<th>Nombre_Producto</th>';
echo '<th>Descripcion</th>';
echo '<th>Precio_de_Venta</th>';
echo '<th>Precio_de_Compra</th>';
echo '<th>Cantidad_Existente</th>';
echo '<th>Fecha_Caducidad</th>';
echo'</tr>';
//recorremos c/u registros
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['ID_Producto'].'</td>' ; 
    echo  '<td>'.$fila['Nombre_Producto'].'</td>' ; 
    echo  '<td>'.$fila['Descripcion'].'</td>' ; 
    echo  '<td>'.$fila['Precio_de_Venta'].'</td>' ; 
    echo  '<td>'.$fila['Precio_de_Compra'].'</td>' ;
    echo  '<td>'.$fila['Cantidad_Existente'].'</td>' ;
    echo  '<td>'.$fila['Fecha_Caducidad'].'</td>' ;

echo '</tr>';
}

?>