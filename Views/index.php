<?php
require_once "../Controllers/inicioSesionController.php";

$action = $_GET["action"] ?? "login";

if ($action == "login") {
  $controller = new UsuarioController();
  $controller->logIn();
}
?>
