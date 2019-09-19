<?php
include('functions.php');
$usuario=$_GET["usuario"];
//http://localhost/WebApiNueva/consulta.php?usuario=icro123

if($resultset=getSQLResultset("SELECT foto,
        
                            folio_tarjeta,

                            usuario,

                            nombres,
                            
                            apaterno,
                            
                            amaterno,
                            
                            nControl,
                            
                            f_nacimiento,
                            
                            genero,
                            
                            email,
                            
                            telefono
                            
                            FROM clientes

                             WHERE usuario = '$usuario'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}

?>

