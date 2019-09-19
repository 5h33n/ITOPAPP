<?php
include('functions.php');

$datos = array();
$respuesta["productos"] = array();

if($resultset=getSQLResultset("SELECT id_producto,n_producto,descripcion,precio_unitario,foto FROM producto where id_subcategoria=100 or
            id_subcategoria=101 or id_subcategoria=102 or id_subcategoria=103")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["id_producto"] = $row[0];
        $tmp["n_producto"] = $row[1];
        $tmp["descripcion"] = $row[2];
        $tmp["precio_unitario"] = $row[3];
        $tmp["foto"] = $row[4];
        
        
        array_push($respuesta["productos"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>