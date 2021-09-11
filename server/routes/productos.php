<?php
//Utilizamos un metodo GET para traer todos los productos.

function router($method, $url, $closure) {
    //Request uri trae la uri actual
	$route = $_SERVER['REQUEST_URI'];
    //Se elimina todo lo que no es la uri base para usar url's relativas
    $route = str_replace("github/Proyecto-1-Macrohard/server/", "", $route);
	if (strpos($route, '?')) {
		$route = strstr($route, '?', true);
	}
	$urlRule = preg_replace('/:([^\/]+)/', '(?<\1>[^/]+)', $url);
	$urlRule = str_replace('/', '\/', $urlRule);

	preg_match_all('/:([^\/]+)/', $url, $parameterNames);

    if($method === $_SERVER['REQUEST_METHOD']) {
        if (preg_match('/^' . $urlRule . '\/*$/s', $route, $matches)) {
    
            $parameters = array_intersect_key($matches, array_flip($parameterNames[1]));
            call_user_func_array($closure, $parameters);
        }

    }
}


router("GET", "/models/productos", function()){  // ) agregado
    include_once("../models/productos.php");
    echo mostrar_productos();

}; // )eliminado

