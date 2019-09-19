<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$id_cliente=$_GET['id_cliente'];
$nombres=$_GET['nombres'];
$apaterno=$_GET['apaterno'];
$amaterno=$_GET['amaterno'];
$nControl=$_GET['nControl'];
$f_nacimiento=$_GET['f_nacimiento'];
$genero=$_GET['genero'];
$telefono=$_GET['telefono'];


ejecutarSQLCommand("UPDATE clientes SET nombres = $nombres, apaterno= $apaterno, amaterno= $amaterno, nControl= $nControl, 
f_nacimiento= $f_nacimiento, genero= $genero, telefono= $telefono WHERE id_cliente= $id_cliente;");
 
?>