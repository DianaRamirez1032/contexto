<?php
require_once "conexionBD.php";

class Contrato {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    // Insertar contrato y devolver el ID
    public function insertarContrato($titulo, $proveedor, $descripcion, $idUsuario) {
        $sql = "INSERT INTO contratos 
                (titulo_contrato, proveedor_contrato, descripcion_contrato, id_usuario, estado_contrato, fecha_contrato) 
                VALUES (:titulo, :proveedor, :descripcion, :idUsuario, :estado, :fecha)";
        $stmt = $this->conn->prepare($sql);

        // Estado predeterminado: Borrador
        $estado = "Borrador";
        // Fecha actual en formato YYYY-MM-DD
        $fecha = date("Y-m-d");

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":proveedor", $proveedor);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
        $stmt->bindParam(":estado", $estado);
        $stmt->bindParam(":fecha", $fecha);

        $stmt->execute();

        return $this->conn->lastInsertId();
    }

    // Insertar partes del contrato asociadas al contrato
    public function insertarPartes($contratoId, $usuarios) {
        $sql = "INSERT INTO partes_contratos (id_contrato, nombre_parte, rol_parte) 
                VALUES (:idContrato, :nombre, :rol)";
        $stmt = $this->conn->prepare($sql);

        foreach ($usuarios as $usuario) {
            $stmt->bindParam(":idContrato", $contratoId, PDO::PARAM_INT);
            $stmt->bindParam(":nombre", $usuario['nombre']);
            $stmt->bindParam(":rol", $usuario['rol']);
            $stmt->execute();
        }
    }

    // Listar contratos de un usuario
    public function listarContratosPorUsuarioPaginado($idUsuario, $limit, $offset, $busqueda = null, $estado = null) {
        $sql = "SELECT id_contrato, titulo_contrato, estado_contrato, fecha_contrato 
                FROM contratos 
                WHERE id_usuario = :idUsuario";

        if (!empty($busqueda)) {
            $sql .= " AND titulo_contrato LIKE :busqueda";
        }
        if (!empty($estado)) {
            $sql .= " AND estado_contrato = :estado";
        }

        $sql .= " ORDER BY fecha_contrato DESC LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);

        if (!empty($busqueda)) {
            $like = "%".$busqueda."%";
            $stmt->bindParam(":busqueda", $like, PDO::PARAM_STR);
        }
        if (!empty($estado)) {
            $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
        }

        $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function contarContratosPorUsuario($idUsuario, $busqueda = null, $estado = null) {
        $sql = "SELECT COUNT(*) as total FROM contratos WHERE id_usuario = :idUsuario";

        if (!empty($busqueda)) {
            $sql .= " AND titulo_contrato LIKE :busqueda";
        }
        if (!empty($estado)) {
            $sql .= " AND estado_contrato = :estado";
        }

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);

        if (!empty($busqueda)) {
            $like = "%".$busqueda."%";
            $stmt->bindParam(":busqueda", $like, PDO::PARAM_STR);
        }
        if (!empty($estado)) {
            $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
        }

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

}
