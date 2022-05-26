<?php session_start();
//Cargamos el autoload, teniendo acceso a todos los controladores, a todas las clases
require_once 'autoload.php';
//base de datos
require_once 'config/db.php';
//parametros de configuracion
require_once 'config/parameters.php';
//helper
require_once 'helpers/utils.php';
//requerimos maqueta html
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function show_error()
{
    $error = new errorController();
    $error->index();
}

//verificamos si llega el controlador por la url
if (isset($_GET['controller'])) {
    $autocargar = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $autocargar = controller_default;
} else {
    show_error();
    exit();
}

//Comprobamos si existe el controlador y si existe la clase creamos el objeto
if (class_exists($autocargar)) {
    $controlador = new $autocargar();

    //Comprobamos si nos llega la accion y si el metodo existe dentro del controlador y procedemos a llamar al metodo
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $action_default = action_default;
        $controlador->$action_default();
    } else {
        show_error();
    }
} else {
    show_error();
}

require_once 'views/layout/footer.php';
