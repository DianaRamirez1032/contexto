<?php
// Cargar controladores
require_once "../Controllers/inicioSesionController.php";
require_once "../Controllers/contratoController.php";

// Acción por defecto
$action = $_GET["action"] ?? "login";
$controllerName = $_GET["controller"] ?? "Usuario";

// Instanciar el controlador correcto
switch ($controllerName) {
    case "Usuario":
        $controller = new UsuarioController();
        break;
    case "Contrato":
        $controller = new ContratoController();
        break;
    default:
        die("Controlador no encontrado");
}

// Ejecutar acción
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die("Acción no encontrada");
}
