<?php
include('functions.php');
$id_papeleria=$_GET["id_papeleria"];
header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$respuesta["slider"] = array();

if($resultset=getSQLResultset("SELECT clave,valor FROM configuracion WHERE id_papeleria=$id_papeleria and correspondencia LIKE 'slider%'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["clave"] = $row[0];
        $tmp["valor"] = $row[1];

        
        array_push($respuesta["slider"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>
