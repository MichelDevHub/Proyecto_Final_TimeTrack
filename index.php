<?php
require_once 'vendor/autoload.php';

session_start();

use migue\proyectoFinalTimetrack\Config\Parameters;
use migue\proyectoFinalTimetrack\Controllers\ViewController;

// Seguridad: Limpiar el nombre del controlador
$controllerName = $_GET['controller'] ?? Parameters::$DEFAULT_CONTROLLER;
$controllerName = preg_replace('/[^a-zA-Z0-9]/', '', $controllerName); 

$nameController = "migue\\proyectoFinalTimetrack\\Controllers\\" . $controllerName . 'Controller';
$action = $_GET['action'] ?? Parameters::$DEFAULT_ACTION;

if (class_exists($nameController)) {
    $controller = new $nameController();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        (new ViewController())->viewError('Action not found');
    }
} else {
    (new ViewController())->viewError('Controller not found');
}
?>
