<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );

$id_cliente=$_GET['id_cliente'];
$id_producto=$_GET['id_producto'];
$precio=$_GET['precio'];
$cantidad=$_GET['cantidad'];
$total=$_GET['total'];




ejecutarSQLCommand("INSERT INTO  carrito (id_cliente,id_producto,precio,cantidad,total)
VALUES ('$id_cliente','$id_producto','$precio','$cantidad','$total');

ON DUPLICATE KEY UPDATE id_cliente='$id_cliente',id_producto='$id_producto',precio='$precio',cantidad='$cantidad',totalo='$total';");


 
?>