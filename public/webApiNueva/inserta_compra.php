<?php include ('functions.php');
header( 'Content-Type: text/html;charset=utf-8' );

$folio_compra=$_GET['folio_compra'];
$id_cliente=$_GET['id_cliente'];
$fecha_pagado=$_GET['fecha_pagado'];
$total_compra=$_GET['total_compra'];

ejecutarSQLCommand("INSERT INTO  compra (folio_compra,id_cliente,fecha_pagado,total_compra)
VALUES ('$folio_compra','$id_cliente','$fecha_pagado','$total_compra');

ON DUPLICATE KEY UPDATE folio_compra = 'folio_compra',id_cliente='$id_cliente',fecha_agregado='$fecha_agregado',total_compra='$total_compra';");


 
?>