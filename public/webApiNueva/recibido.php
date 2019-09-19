<?php 
include 'conexion.php';
$folio_compra=$_GET["folio_compra"];
//error_reporting(0);
 $tmp = array();

$consulta="UPDATE  compra SET recibido= '1'
where folio_compra = '$folio_compra' ";

mysqli_query($conexion,$consulta) or die ("Problemas al actualizar".mysqli_error($conexion));
     $rc = mysqli_affected_rows($conexion)   ;  

       $tmp = array($rc);
        echo json_encode($tmp);       
mysqli_close($conexion);

//$result = mysqli_query($conexion,$consulta); 
    

      
 
?>
