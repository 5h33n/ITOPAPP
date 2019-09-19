<?php
include('functions.php');

$datos = array();
$respuesta["ofertas"] = array();

if($resultset=getSQLResultset("SELECT id_oferta,n_oferta,descripcion,precio,foto FROM ofertas ")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["id_oferta"] = $row[0];
        $tmp["n_oferta"] = $row[1];
        $tmp["descripcion"] = $row[2];
        $tmp["precio"] = $row[3];
        $tmp["foto"] = $row[4];
        
        
        array_push($respuesta["ofertas"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>
