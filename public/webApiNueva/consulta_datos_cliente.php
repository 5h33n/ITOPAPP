<?php
include('functions.php');
$usuario=$_GET["usuario"];
//http://localhost/WebApiNueva/consulta.php?usuario=icro123

header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$respuesta["cliente"] = array();

if($resultset=getSQLResultset("SELECT 

                            usuario,

                            nombres,
                            
                            apaterno,
                            
                            amaterno,
                            
                            nControl,
                            
                            f_nacimiento,
                            
                            genero,
                            
                            email,
                            
                            telefono,
                            
                            foto
                            
                            FROM clientes

                            WHERE usuario = '$usuario'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["usuario"] = utf8_encode($row[0]);
        $tmp["nombres"] = utf8_encode($row[1]);
        $tmp["apaterno"] = utf8_encode($row[2]);
        $tmp["amaterno"] = utf8_encode($row[3]);
        $tmp["nControl"] = utf8_encode($row[4]);
        $tmp["f_nacimiento"] = utf8_encode($row[5]);
        $tmp["genero"] = utf8_encode($row[6]);
        $tmp["email"] = utf8_encode($row[7]);
        $tmp["telefono"] = utf8_encode($row[8]);
        $tmp["foto"] = utf8_encode($row[9]);
        
        
        array_push($respuesta["cliente"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}



?>

