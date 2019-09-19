<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );

$id_compra=$_GET['id_compra'];
$id_producto=$_GET['id_producto'];
$precio=$_GET['precio'];
$cantidad=$_GET['cantidad'];
$total=$_GET['total'];




ejecutarSQLCommand("INSERT INTO  detalle_compra (id_compra,id_producto,precio,cantidad,total)
VALUES ('$id_compra','$id_producto','$precio','$cantidad','$total');
 

ON DUPLICATE KEY UPDATE id_compra='$id_compra',id_producto='$id_producto',precio='$precio',cantidad='$cantidad';");


 
?>