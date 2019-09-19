<?php
$hostname='localhost';
$database='bd_itopapp';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "lo sentimos, el sitio la app esta experimentando problemas";
}
?>