<?php
error_reporting(0);
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$usuario=$_GET["usuario"];
$email=$_GET["email"];
$password=$_GET["password"];
//http://localhost/WebApiNueva/consulta.php?usuario=icro123

if($resultset=getSQLResultset("SELECT password FROM users WHERE (usuario = '$usuario') OR (email = '$email')")){
    $resp = $resultset->fetch_array(MYSQLI_NUM);
    if (password_verify($password, $resp[0])) {
        echo json_encode(array(1));
    }else{
        echo json_encode(array(0));
    }
    
}

?>