<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$id_subcategoria=$_GET["id_subcategoria"];
$datos = array();

if($resultset=getSQLResultset("SELECT count(id_subcategoria) from subcategoria where id_padre =".$id_subcategoria)){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}


?>