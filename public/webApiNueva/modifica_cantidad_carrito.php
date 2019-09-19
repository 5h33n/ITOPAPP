<?php 
include 'conexion.php';
$id_producto=$_POST['id_producto'];
$cantidad=$_POST['cantidad'];
$id_cliente=$_POST['id_cliente']

//error_reporting(0);


$consulta="UPDATE  carrito SET cantidad= '$cantidad'
where id_producto = '$id_producto' and id_cliente= '$id_cliente'";

mysqli_query($conexion,$consulta) or die ("Problemas al actualizar".mysqli_error($conexion));
     $rc = mysqli_affected_rows($conexion)   ;  
            echo $rc;       
mysqli_close($conexion);

//$result = mysqli_query($conexion,$consulta); 
    
       
  
  
      
 
?>
