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
                // Guardamos tanto el id como el email
                $_SESSION["usuario_id"] = $result["id_usuario"];
                $_SESSION["usuario_email"] = $result["email_usuario"];

                header("Location: src/dashboard/dashboard.php");
            } else {
                $error = "Credenciales incorrectas";
                include "../Views/src/logIn.php";
            }
        } else {
            include "../Views/src/logIn.php";
        }
    }
}
?>
