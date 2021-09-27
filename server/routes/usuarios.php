<?php

router("GET", "/usuarios", function(){
    include_once("./models/usuarios.php");
    echo mostrar_usuarios();
    }
);
