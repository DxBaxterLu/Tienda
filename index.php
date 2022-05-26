<?php
//Cargamos el autoload, teniendo acceso a todos los controladores, a todas las clases
require_once 'autoload.php';

//verificamos si llega el controlador por la url
if (isset($_GET['controllers'])) {
    $autocargar = $_GET['controllers'] . 'Controller';
} else {
    echo "La pagina que buscas no existe";
    exit();
}

//Comprobamos si existe el controlador y si existe la clase creamos el objeto
if (class_exists($autocargar)) {
    $controlador = new $autocargar();

    //Comprobamos si nos llega la accion y si el metodo existe dentro del controlador y procedemos a llamar al metodo
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe";
    }
} else {
    echo "La pagina que buscas no existe";
}
