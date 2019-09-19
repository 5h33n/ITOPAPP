<?php 
include 'conexion.php';
$id_compra=$_GET["id_compra"];



$consulta="UPDATE  compra SET pagado= '1'
where id_compra = '$id_compra' ";

mysqli_query($conexion,$consulta) or die ("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);
 
?>

