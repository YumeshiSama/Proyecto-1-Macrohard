<?php
function mostrar_productos() {
    return json_encode([
        [
            "id" => 1,
            "nombre"=> "Coca cola", 
            "precio" => 180, 
            "cantidad"=>10,
            "img"=>"../3.jpg"
        ],
        [
            "id" => 2,
            "nombre"=> "La Gotita", 
            "precio" => 150, 
            "cantidad"=>5,
            "img"=>"../3.jpg"
        ]
    ]    
    );

}

