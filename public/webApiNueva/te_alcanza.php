

<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$id_cliente=$_GET["id_cliente"];
$datos = array();
$respuesta["credito"] = array();

if($resultset=getSQLResultset("SELECT 
        
                            folio,
                            credito
                            
            FROM tarjeta WHERE id_cliente='$id_cliente' and estado = 1")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        
        $tmp["folio"] = $row[0];
        $tmp["credito"] = $row[1];
      
        
        
        array_push($respuesta["credito"], $tmp);
        
		
	}
      header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}


?>