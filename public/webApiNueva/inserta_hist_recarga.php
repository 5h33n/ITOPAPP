<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$folio=$_GET['folio'];
$monto=$_GET['monto'];
$id_cliente=$_GET['id_cliente'];
$fecha=$_GET['fecha'];

ejecutarSQLCommand("INSERT INTO  historialRecargas (folio,monto,fecha,id_cliente)
VALUES ('$folio','$monto','$fecha','$id_cliente');

ON DUPLICATE KEY UPDATE folio='$folio',monto='$monto',fecha='$fecha',id_cliente='$id_cliente';");


 
?>