<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$usuario=$_GET['usuario'];
$nombres=$_GET['nombres'];
$apaterno=$_GET['apaterno'];
$amaterno=$_GET['amaterno'];
$nControl=$_GET['nControl'];
$f_nacimiento=$_GET['f_nacimiento'];
$genero=$_GET['genero'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];
$id_papeleria=$_GET['id_papeleria'];


ejecutarSQLCommand("INSERT INTO  clientes (usuario,nombres,apaterno,amaterno,nControl,f_nacimiento,genero,email,telefono,id_papeleria)
VALUES ('$usuario','$nombres','$apaterno','$amaterno','$nControl','$f_nacimiento' ,'$genero','$email','$telefono','$id_papeleria');

ON DUPLICATE KEY UPDATE usuario= '$usuario',apaterno= '$apaterno',amaterno= '$amaterno',nControl= '$nControl',f_nacimiento= '$f_nacimiento',genero= '$genero',email= '$email',telefono= '$telefono',id_papeleria='$id_papeleria';");
 
?>