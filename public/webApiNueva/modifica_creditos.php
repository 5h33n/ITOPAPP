<?php 
include 'conexion.php';
$id_cliente=$_GET['id_cliente'];
$credito=$_GET['credito'];
$ultima_recarga=$_GET['ultima_recarga'];


//error_reporting(0);

$consulta="UPDATE  tarjeta SET credito= '$credito', ultima_recarga='$ultima_recarga'
where id_cliente = '$id_cliente' ";

mysqli_query($conexion,$consulta) or die ("Problemas al actualizar".mysqli_error($conexion));
     $rc = mysqli_affected_rows($conexion)   ;  
            echo $rc;       
mysqli_close($conexion);

//$result = mysqli_query($conexion,$consulta); 
    
       
  
  
      
 
?>
