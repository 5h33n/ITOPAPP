<?php
error_reporting(0);
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$usuario=$_GET["usuario"];
$email=$_GET["email"];

//http://localhost/WebApiNueva/consulta.php?usuario=icro123

if($resultset=getSQLResultset("SELECT 
        
                            usuario,
                            email
                            
                            FROM users

                             WHERE 
                             (usuario = '$usuario') OR (email = '$email')")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}


?>