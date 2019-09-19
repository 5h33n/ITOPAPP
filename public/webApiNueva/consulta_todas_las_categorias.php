<?php
include('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$respuesta["categorias"] = array();

if($resultset=getSQLResultset("SELECT nombre,descripcion,foto FROM categoria")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["nombre"] = $row[0];
        $tmp["descripcion"] = $row[1];
        $tmp["foto"] = $row[2];
        
        array_push($respuesta["categorias"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}else{
    
    echo 0;
    
}

?>

