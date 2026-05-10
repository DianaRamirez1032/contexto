<?php
require_once "../Models/modal.php"; // importa tu clase

$db = new Database();
$conn = $db->conectar();

if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "No se pudo conectar.";
}
?>
