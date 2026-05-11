<?php
require_once "conexionBD.php";

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function verificarUsuario($email, $password) {
        $query = "SELECT id_usuario, email_usuario, contraseña_usuario 
                  FROM usuarios 
                  WHERE email_usuario = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario["contraseña_usuario"])) {
            // Retornamos todo el registro para usar id_usuario en sesión
            return $usuario;
        }
        return false;
    }
}
?>
