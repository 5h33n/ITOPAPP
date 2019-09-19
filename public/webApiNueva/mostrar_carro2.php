<?php
include('functions.php');
$id_cliente=$_GET["id_cliente"];
header( 'Content-Type: text/html;charset=utf-8' );
$datos = array();
$respuesta["compras"] = array();

if($resultset=getSQLResultset("SELECT carrito.id_producto,carrito.precio,carrito.cantidad, producto.n_producto, producto.foto1,producto.cantidad FROM carrito inner join producto
on (carrito.id_producto = producto.id_producto)
 where (carrito.id_cliente = '$id_cliente')")){
    $c = 1;
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
        
        $tmp = array();
        
        $tmp["id_producto"] = $row[0];
        $tmp["precio"] = $row[1];
        $tmp["cantidad"] = $row[2];
         $tmp["n_producto"] = $row[3];
        $tmp["foto"] = $row[4];
         $tmp["cantidad2"] = $row[5];
        $tmp["id"] = $c;
        $c++;
        
        
        array_push($respuesta["compras"], $tmp);
        
		
	}
    
    // manteniendo cabecera de respuesta a JSON
     header('Content-Type: application/json');
    
    echo json_encode($respuesta);
}

?>