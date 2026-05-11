<?php
require_once "../Models/contratoModel.php";

class ContratoController {
    public function guardar() {
        session_start();

        if (!isset($_SESSION['usuario_id'])) {
            die("Error: No hay usuario en sesión");
        }

        $titulo = $_POST['titulo'];
        $proveedor = $_POST['proveedor'];
        $descripcion = $_POST['descripcion'];
        $usuarios = $_POST['usuarios'] ?? [];

        $contratoModel = new Contrato();

        // Insertar contrato con el usuario en sesión
        $contratoId = $contratoModel->insertarContrato(
            $titulo,
            $proveedor,
            $descripcion,
            $_SESSION['usuario_id'] // 🔹 aquí ya no será null
        );

        // Insertar partes
        if (!empty($usuarios)) {
            $contratoModel->insertarPartes($contratoId, $usuarios);
        }

        header("Location: index.php?controller=Contrato&action=listar");
    }

    public function listar() {
        session_start();
        if (!isset($_SESSION['usuario_id'])) {
            die("Error: No hay usuario en sesión");
        }

        $contratoModel = new Contrato();

        // Parámetros de paginación
        $pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $porPagina = 5;
        $offset = ($pagina - 1) * $porPagina;

        // Capturamos filtros
        $busqueda = $_GET['search'] ?? null;
        $estado   = $_GET['estado'] ?? null;

        // Total de contratos y lista paginada
        $totalContratos = $contratoModel->contarContratosPorUsuario($_SESSION['usuario_id'], $busqueda, $estado);
        $contratos      = $contratoModel->listarContratosPorUsuarioPaginado($_SESSION['usuario_id'], $porPagina, $offset, $busqueda, $estado);
        $totalPaginas = ($totalContratos > 0) ? ceil($totalContratos / $porPagina) : 1;

        include "../Views/src/contratos/contratos.php";
    }

}
