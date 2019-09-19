<?php
include('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );
$id_cliente=$_GET["id_cliente"];


//http://192.168.0.2/WebApiNueva/consulta_productos_nombre.php?descripcion=%lapi%

$datos = array();
$respuesta["ComprasPagadas"] = array();

if($resultset=getSQLResultset("SELECT id_compra,folio_compra,fecha_pagado,total_compra,recibido
FROM compra 
WHERE 
id_cliente='$id_cliente' "))

{
    $c = 1;
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["id_compra"] = $row[0];
        $tmp["folio_compra"] = $row[1];
        $tmp["fecha_pagado"] = $row[2];
        $tmp["total_compra"] = $row[3];
            $tmp["recibido"] = $row[4];
        
        $tmp["cont"] = $c;
        $c++;
        
       
        
        array_push($respuesta["ComprasPagadas"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}else{
    
    echo 0;
    
}

?>