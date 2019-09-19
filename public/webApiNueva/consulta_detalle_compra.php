<?php
include('functions.php');
$id_compra=$_GET["id_compra"];
header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$respuesta["detallecompras"] = array();

if($resultset=getSQLResultset("SELECT detalle_compra.id_producto,producto.n_producto,detalle_compra.precio,detalle_compra.cantidad,detalle_compra.total,producto.foto1  FROM detalle_compra
inner join producto
on (detalle_compra.id_producto = producto.id_producto)
where (id_compra = '$id_compra')")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        
        $tmp["id_producto"] = $row[0];
        $tmp["n_producto"] = $row[1];
        $tmp["precio"] = $row[2];
        $tmp["cantidad"] = $row[3];
        $tmp["total"] = $row[4];
        $tmp["foto1"] = $row[5];
        
        
        array_push($respuesta["detallecompras"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>
