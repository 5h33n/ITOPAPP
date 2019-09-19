<?php
include('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$id_subcategoria=$_GET["id_subcategoria"];
$respuesta["productos"] = array();

if($resultset=getSQLResultset("SELECT id_producto,n_producto,descripcion,precio_unitario,foto1,cantidad FROM producto where id_subcategoria = ".$id_subcategoria )){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["id_producto"] = $row[0];
        $tmp["n_producto"] = $row[1];
        $tmp["descripcion"] = $row[2];
        $tmp["precio_unitario"] = $row[3];
        $tmp["foto1"] = $row[4];
        $tmp["cantidad"] = $row[5];
        
        array_push($respuesta["productos"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>

