<?php  
$conexion = mysqli_connect('localhost','root','','abm');
if(!$conexion)
{
    die("Falló la conexión a la base de datos: " . mysqli_connect_error());
}
?>