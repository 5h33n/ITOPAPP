<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');

$datos = array();
$respuesta["categorias"] = array();

if($resultset=getSQLResultset("SELECT id_categoria,nombre,descripcion,foto FROM categoria;")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        $tmp = array();
        $tmp["id_categoria"] = utf8_encode($row[0]);
        $tmp["nombre"] = utf8_encode($row[1]);
        $tmp["descripcion"] = utf8_encode($row[2]);
        $tmp["foto"] = utf8_encode($row[3]);
        
        array_push($respuesta["categorias"], $tmp);
        
	}
    
    // manteniendo cabecera de respuesta a JSON
    echo json_encode($respuesta);
}

//http://localhost/webapinueva/consulta_todos_las_categorias.php
?>