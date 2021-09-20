<?php
function mostrar_productos() {
    include "conexion.php";
    $sql = "SELECT productos.id, productos.img, productos.que_es, productos.nombre, productos.precio, tipos_de_cosas.tipo FROM productos LEFT JOIN tipos_de_cosas ON productos.que_es = tipos_de_cosas.id GROUP BY productos.id";
    $resultado = mysqli_query($con,$sql);
    $row= $resultado->fetch_all(1);
    return json_encode($row);
}

