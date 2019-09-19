<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$id_producto=$_GET["id_producto"];
$id_cliente=$_GET["id_cliente"];
$datos = array();
$respuesta["existe"] = array();

if($resultset=getSQLResultset("SELECT count(id_producto),cantidad from carrito where id_producto = $id_producto and id_cliente = $id_cliente")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        
        $tmp["contador"] = $row[0];
        $tmp["cantidad"] = $row[1];
      
        
        
        array_push($respuesta["existe"], $tmp);
        
		
	}
      header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}


?>