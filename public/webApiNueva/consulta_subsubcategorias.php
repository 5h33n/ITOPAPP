<?php
header( 'Content-Type: text/html;charset=utf-8' );
include('functions.php');
$id_subcategoria=$_GET["id_subcategoria"];
$datos = array();
$respuesta["subsubcategorias"] = array();

if($resultset=getSQLResultset("SELECT id_subcategoria, nombre, foto FROM subcategoria where id_padre =  ".$id_subcategoria." and estado = 1")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        $tmp["id_subcategoria"] = $row[0];
        $tmp["nombre"] = $row[1];
        $tmp["foto"] = $row[2];
        
        array_push($respuesta["subsubcategorias"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

//http://localhost/webapinueva/consulta_todos_las_categorias.php
?>