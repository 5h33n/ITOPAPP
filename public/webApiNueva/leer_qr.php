<?php
include('functions.php');
$folio_compra=$_GET["folio_compra"];
$id_cliente=$_GET["id_cliente"];
header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$respuesta["leerqr"] = array();

if($resultset=getSQLResultset("SELECT detalle_compra.id_producto,producto.n_producto,detalle_compra.precio,detalle_compra.cantidad,detalle_compra.total,producto.foto1,clientes.nombres, clientes.apaterno, clientes.amaterno, compra.folio_compra,compra.fecha_pagado, compra.total_compra,compra.recibido FROM detalle_compra
inner join producto
on (detalle_compra.id_producto = producto.id_producto)
inner join compra
on (compra.folio_compra = '$folio_compra')
inner join clientes
on (clientes.id_cliente = '$id_cliente')")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        
        $tmp["id_producto"] = utf8_encode($row[0]);
        $tmp["n_producto"] = utf8_encode($row[1]);
        $tmp["precio"] = utf8_encode($row[2]);
        $tmp["cantidad"] = utf8_encode($row[3]);
        $tmp["total"] = utf8_encode($row[4]);
        $tmp["foto1"] = utf8_encode($row[5]);
        $tmp["nombres"] = utf8_encode($row[6]);
        $tmp["apaterno"] = utf8_encode($row[7]);
        $tmp["amaterno"] = utf8_encode($row[8]);
        $tmp["folio_compra"] = utf8_encode($row[9]);
        $tmp["fecha_pagado"] = utf8_encode($row[10]);
        $tmp["total_compra"] = utf8_encode($row[11]);   
        $tmp["recibido"] = utf8_encode($row[12]);
        
        
        
        
        
        array_push($respuesta["leerqr"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>
