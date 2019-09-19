<?php 
include 'conexion.php';
$id_producto=$_POST['id_producto'];
$cantidad=$_POST['cantidad'];



//error_reporting(0);


$consulta="UPDATE  producto SET cantidad= '$cantidad'
where id_producto = '$id_producto' ";

mysqli_query($conexion,$consulta) or die ("Problemas al actualizar".mysqli_error($conexion));
     $rc = mysqli_affected_rows($conexion)   ;  
            echo $rc;       
mysqli_close($conexion);

//$result = mysqli_query($conexion,$consulta); 
    
       
  
  
      
 
?>
