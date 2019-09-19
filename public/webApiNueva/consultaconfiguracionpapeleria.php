
<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');   
$id_papeleria=$_GET["id_papeleria"];
$datos = array();
$respuesta["configPapeleria"] = array();

if($resultset=getSQLResultset("SELECT 
        
                            nombre,
                            logo,
                            facebook,
                            twitter,
                            instagram
                            
            FROM papeleria WHERE id_papeleria='$id_papeleria'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["nombre"] = $row[0];
        $tmp["logo"] = $row[1];
        
     
        array_push($respuesta["configPapeleria"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
    
    
    
}


?>