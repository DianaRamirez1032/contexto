<?php
require_once "../Models/usuarioModel.php";

class UsuarioController {

    public function logIn() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $usuarioModel = new Usuario();
            $result = $usuarioModel->verificarUsuario($email, $password);

            if ($result) {
                session_start();
                $_SESSION["usuario"] = $result["email"];
                header("Location: src/dashboard/dashboard.php");
            } else {
                $error = "Credenciales incorrectas";
                echo $result;
                include "../Views/src/logIn.php";
            }
        } else {
            include "../Views/src/logIn.php";
        }
    }
}
?>
