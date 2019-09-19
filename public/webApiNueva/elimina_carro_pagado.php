<?php
include('functions.php');

$id_cliente=$_GET["id_cliente"];



if($resultset=getSQLResultset("DELETE 
                            
                            FROM carrito

                             WHERE 
                             id_cliente = '$id_cliente'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}


?>