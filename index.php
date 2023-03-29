<?php

//Se incluye el método que carga controladores controllers_autoload
require_once "autoload.php";
require_once "config/db.php";
require_once "views/layouts/header.php";
require_once "views/layouts/aside.php";

//Si está definidio el parámetro controller en la URL
if (isset($_GET["controller"])) {
    //El nombre del controlador será <controlador>Controller
    $nombre_controlador = $_GET["controller"] . "Controller";
} else {
    //Si no existe el parámetro controller, entonces se termina la ejecución
    echo "La pagina que buscas no existe";
    exit();
}

//Pasada la prueba de existencia del parámetro
//Se revisa si existe la clase del controlador
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET["action"]) && method_exists($controlador, $_GET["action"])) {
        $action = $_GET["action"];
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe";
    }
} else {
    echo "La pagina que buscas no existe";
}

require_once "views/layouts/footer.php";
