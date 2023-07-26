<?php
/* conexipon a mysql */
$link =mysqli_connect("localhost:3307","root","","miscelánea la palma");
//comprobamos conexión   7
if($link === 0){
    echo "error";
}
//consulta 
$consulta = " SELECT * FROM Categoria " ;
$resultado = $link->query($consulta);  
// encabezado de la tabla
echo '<table border="1">';
echo '<tr>';
echo '<th>ID_Categoria</th>';
echo '<th>Nombre</th>';
echo'</tr>';
//recorremos c/u registros
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['ID_Categoria'].'</td>' ; 
    echo  '<td>'.$fila['Nombre'].'</td>' ; 
    
echo '</tr>';
}

?>