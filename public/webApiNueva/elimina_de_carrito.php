<?php
include('functions.php');

$id_producto=$_GET["id_producto"];
$id_cliente=$_GET["id_cliente"];



if($resultset=getSQLResultset("DELETE 
                            
                            FROM carrito

                             WHERE 
                             id_producto = '$id_producto' and id_cliente = '$id_cliente'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}


?>