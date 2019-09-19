<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$id_cliente=$_GET["id_cliente"];
$folio_compra=$_GET["folio_compra"];
$datos = array();
$respuesta["identificador"] = array();

if($resultset=getSQLResultset("SELECT 
        
                           id_compra
                            
                            FROM compra

                             WHERE 
                             (id_cliente = '$id_cliente') AND (folio_compra = '$folio_compra')")){
		while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        
        $tmp["id_compra"] = $row[0];

      
        
        
        array_push($respuesta["identificador"], $tmp);
        
		
	}
      header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}


?>