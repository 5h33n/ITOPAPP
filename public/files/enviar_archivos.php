<?php 
include 'conexion.php';

$foto=$_POST['foto'];
$p=$_POST['p'];
$id_cliente=$_POST['id_cliente'];



$path = "$p";

$url="http://localhost/webApiNueva/$path";

$consulta="UPDATE  clientes SET foto= '".$p."' WHERE id_cliente= '".$id_cliente."'";

file_put_contents($path,base64_decode($foto));
$bytesArchivo=file_get_contents($path);

mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
 
?>