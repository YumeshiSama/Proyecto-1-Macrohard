<?php
function mostrar_usuarios() {
    include "conexion.php";
    $sql = "SELECT * FROM users";
    $resultado = mysqli_query($con,$sql);
    $row= $resultado->fetch_all(1);
    return json_encode($row);
}
