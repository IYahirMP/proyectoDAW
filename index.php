<?php

//Se incluye el método que carga controladores controllers_autoload
require_once "autoload.php";
require_once "config/db.php";
require_once "config/parameters.php";
require_once "views/layouts/header.php";
require_once "views/layouts/aside.php";

function show_error()
{
    $error = new errorController();
    $error->index();
}

//Si está definidio el parámetro controller en la URL
if (isset($_GET["controller"])) {
    //El nombre del controlador será <controlador>Controller
    $nombre_controlador = $_GET["controller"] . "Controller";
} else if (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
} else {
    show_error();
    exit();
}

//Pasada la prueba de existencia del parámetro
//Se revisa si existe la clase del controlador
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET["action"]) && method_exists($controlador, $_GET["action"])) {
        $action = $_GET["action"];
        $controlador->$action();
    } else if (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $action = action_default;
        $controlador->$action();
    } else {
        show_error();
    }
} else {
    show_error();
}

require_once "views/layouts/footer.php";
