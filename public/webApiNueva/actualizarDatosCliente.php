<?php 
include 'conexion.php';

$nombres=$_POST['nombres'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nControl=$_POST['nControl'];
$f_nacimiento=$_POST['f_nacimiento'];
$genero=$_POST['genero'];
$telefono=$_POST['telefono'];
$id_cliente=$_POST['id_cliente'];

//http://localhost/WebApiNueva/actualizarDatosCliente.php?nombres='david'&apaterno='lopez'&amaterno='guzman'&nControl='15161297'&f_nacimiento='1995-1-1'&genero='Masculino'&email='davidicro@gmail.com'&telefono='9512182680'&id_cliente=1


$consulta="UPDATE  clientes SET nombres= '".$nombres."',apaterno= '".$apaterno."' ,amaterno= '".$amaterno."' ,nControl= '".$nControl."' ,
f_nacimiento= '".$f_nacimiento."' ,genero='".$genero."' ,telefono='".$telefono."' WHERE id_cliente= '".$id_cliente."'";

mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
 
?>


