<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );

$folio=$_GET['folio'];
$id_cliente=$_GET['id_cliente'];
$f_exp=$_GET['f_exp'];

ejecutarSQLCommand("INSERT INTO  tarjeta (folio,credito,f_exp,id_cliente)
VALUES ('$folio','0','$f_exp','$id_cliente');

ON DUPLICATE KEY UPDATE folio = '$folio',f_exp='$f_exp',id_cliente='$id_cliente';");


 
?>