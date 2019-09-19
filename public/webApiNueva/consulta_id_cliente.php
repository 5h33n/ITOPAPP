<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$usuario=$_GET["usuario"];
//http://localhost/WebApiNueva/consulta.php?usuario=icro123

if($resultset=getSQLResultset("SELECT id_cliente FROM clientes WHERE (usuario = '$usuario') OR (email = '$usuario')")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}


?>