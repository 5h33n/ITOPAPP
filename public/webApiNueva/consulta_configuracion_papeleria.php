
<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$id_papeleria=$_GET["id_papeleria"];

//http://localhost/WebApiNueva/consulta_configuracion_papeleria.php?id_papeleria=1

if($resultset=getSQLResultset("SELECT 
        
                            nombre,
                            logo,
                            facebook,
                            twitter,
                            instagram
                            
            FROM papeleria WHERE id_papeleria='$id_papeleria'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}


?>