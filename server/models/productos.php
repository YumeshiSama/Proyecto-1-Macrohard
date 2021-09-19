<?php
function mostrar_productos() {
    include "conexion.php";
    $sql = "SELECT * FROM productos";
    $resultado = mysqli_query($con,$sql);
    $row= $resultado->fetch_all(1);
    return json_encode($row);

}

