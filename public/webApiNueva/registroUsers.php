<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$usuario=$_GET['usuario'];
$email=$_GET['email'];
$password=password_hash($_GET['password'],PASSWORD_BCRYPT);
$tipo=$_GET['tipo'];


ejecutarSQLCommand("INSERT INTO  users (usuario, email,password,tipo)
VALUES ('$usuario' ,'$email' ,'$password','$tipo')

 ON DUPLICATE KEY UPDATE usuario= '$usuario',email='$email',password='$password',tipo='$tipo';");

 ?>