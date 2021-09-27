<?php

router("GET", "/productos", function(){
    include_once("./models/productos.php");
    echo mostrar_productos();
    }
);

