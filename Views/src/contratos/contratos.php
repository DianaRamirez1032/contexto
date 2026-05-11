<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta content="Codescandy" name="author" />
  <title>Contratos</title>
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <!-- Favicon icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="src/assets/images/favicon/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="src/assets/images/favicon/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="src/assets/images/favicon/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="src/assets/images/favicon/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="src/assets/images/favicon/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="src/assets/images/favicon/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="src/assets/images/favicon/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="src/assets/images/favicon/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="src/assets/images/favicon/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="src/assets/images/favicon/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="src/assets/images/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="src/assets/images/favicon/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="src/assets/images/favicon/favicon-16x16.png" />

  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="src/assets/images/favicon/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
  <!-- Color modes -->
  <script src="../src/assets/js/vendors/color-modes.js"></script>
  <script>
    if (localStorage.getItem("sidebarExpanded") === "false") {
      document.documentElement.classList.add("collapsed");
      document.documentElement.classList.remove("expanded");
    } else {
      document.documentElement.classList.remove("collapsed");
      document.documentElement.classList.add("expanded");
    }
  </script>
  <!-- Libs CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap" />
  <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.min.css" />
  <link rel="stylesheet" href="node_modules/@tabler/icons-webfont/tabler-icons.min.css" />

  <!-- Theme CSS -->
  <!-- build:css ./assets/css/theme.min.css -->
  <link rel="stylesheet" href="src/assets/css/theme.css" />
  <!-- endbuild -->
</head>

<style>
  .sideBarOriginal {
    background-color: #011736 !important;
    /* gris oscuro/negro */
    color: #ffffff;
    /* texto en blanco */
  }

  .sideBarOriginal .nav-link {
    color: #ffffff;
    /* enlaces en blanco */
  }

  .sideBarOriginal .nav-link:hover {
    background-color: #333333;
    /* tono más claro al pasar el mouse */
  }

  .offcanvasNav {
    background-color: #011736;
    color: #ffffff;
  }

  .offcanvasNav .nav-link {
    color: #ffffff;
  }
</style>

<body>
  <!-- Vertical sideBar -->
  <div>
    <div id="miniSidebar" class="sideBarOriginal">
      <div class="brand-logo">
        <a class="d-none d-md-flex align-items-center gap-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-shield-fill-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z" />
          </svg>
          <span class="fw-bold fs-4 site-logo-text">LegalContracts</span>
        </a>
      </div>
      <ul class="navbar-nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="src/dashboard/dashboard.php">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icon-tabler-home">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 -5l5 5v5a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                <path d="M9 21h6" />
              </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <!-- Contratos -->
        <li class="nav-item">
          <a class="nav-link">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icon-tabler-file-text">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <path d="M9 9h1" />
                <path d="M9 13h6" />
                <path d="M9 17h6" />
              </svg>
            </span>
            <span class="text">Contratos</span>
          </a>
        </li>
        <!-- Blockchain -->
        <li class="nav-item">
          <a class="nav-link" href="../pages/blockchain.html">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icon-tabler-link">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 14a3 3 0 0 1 0 -4l4 -4a3 3 0 0 1 4 4l-4 4a3 3 0 0 1 -4 0" />
                <path d="M14 10a3 3 0 0 1 0 4l-4 4a3 3 0 0 1 -4 -4l4 -4a3 3 0 0 1 4 0" />
              </svg>
            </span>
            <span class="text">Blockchain</span>
          </a>
        </li>
        <!-- Auditoría -->
        <li class="nav-item">
          <a class="nav-link" href="../pages/auditoria.html">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icon-tabler-list-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 6h18" />
                <path d="M3 12h18" />
                <path d="M3 18h18" />
                <path d="M9 6l2 2l4 -4" />
              </svg>
            </span>
            <span class="text">Auditoría</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Main Content -->
  <div id="content" class="position-relative h-100">
    <!-- container -->
    <div class="custom-container">
      <!-- row -->
      <div class="row mb-6 g-6">
        <div class="col-xl-12 col-lg-6">
          <div class="container my-5">
            <div class="card shadow-sm">
              <div class="card-body d-flex flex-column gap-4">
                <!-- Encabezado -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h4 class="fw-bold mb-0">Contratos</h4>
                    <small class="text-muted">Administra los contratos del sistema</small>
                  </div>
                  <button class="btn btn-primary" onclick="window.location.href = 'src/contratos/crearContrato.php'">
                    + Nuevo Contrato
                  </button>
                </div>
                <!-- Barra de búsqueda y filtros -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <form method="GET" action="index.php" class="d-flex w-100">
                    <input type="hidden" name="controller" value="Contrato">
                    <input type="hidden" name="action" value="listar">

                    <input type="text" name="search" class="form-control w-50" 
                          placeholder="Buscar contratos..." 
                          value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" />

                    <select name="estado" class="form-select w-25 ms-2">
                      <option value="">Todos</option>
                      <option value="Borrador" <?= ($_GET['estado'] ?? '') == 'Borrador' ? 'selected' : '' ?>>Borrador</option>
                      <option value="Firmado" <?= ($_GET['estado'] ?? '') == 'Firmado' ? 'selected' : '' ?>>Firmado</option>
                      <option value="Validado" <?= ($_GET['estado'] ?? '') == 'Validado' ? 'selected' : '' ?>>Validado</option>
                    </select>

                    <button type="submit" class="btn btn-outline-secondary ms-2">Filtrar</button>
                  </form>
                </div>
                <!-- Tabla -->
                <div class="table-responsive">
                  <table class="table table-hover align-middle">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($contratos)): ?>
                        <?php foreach ($contratos as $contrato): ?>
                          <tr>
                            <td><?= $contrato['id_contrato'] ?></td>
                            <td><?= htmlspecialchars($contrato['titulo_contrato']) ?></td>
                            <td>
                              <span class="badge 
                                <?= $contrato['estado_contrato'] == 'Borrador' ? 'bg-warning-light' : 
                                  ($contrato['estado_contrato'] == 'Firmado' ? 'bg-success' : 'bg-primary') ?>">
                                <?= $contrato['estado_contrato'] ?>
                              </span>
                            </td>
                            <td><?= date("d/m/Y", strtotime($contrato['fecha_contrato'])) ?></td>
                            <td>
                              <!-- Botón Ver con icono de ojo -->
                              <button class="btn btn-sm btn-info" 
                                      onclick="window.location.href='index.php?controller=Contrato&action=ver&id=<?= $contrato['id_contrato'] ?>'">
                                <i class="bi bi-eye"></i>
                              </button>

                              <!-- Botón Editar con icono de lápiz -->
                              <button class="btn btn-sm btn-warning"
                                      onclick="window.location.href='index.php?controller=Contrato&action=editar&id=<?= $contrato['id_contrato'] ?>'">
                                <i class="bi bi-pencil"></i>
                              </button>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="5" class="text-center text-muted">No se encontraron contratos</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <!-- Paginación -->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item <?= $pagina <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" 
                        href="index.php?controller=Contrato&action=listar&page=<?= $pagina-1 ?>&search=<?= urlencode($_GET['search'] ?? '') ?>&estado=<?= urlencode($_GET['estado'] ?? '') ?>">
                        Anterior
                      </a>
                    </li>

                    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                      <li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
                        <a class="page-link" 
                          href="index.php?controller=Contrato&action=listar&page=<?= $i ?>&search=<?= urlencode($_GET['search'] ?? '') ?>&estado=<?= urlencode($_GET['estado'] ?? '') ?>">
                          <?= $i ?>
                        </a>
                      </li>
                    <?php endfor; ?>

                    <li class="page-item <?= $pagina >= $totalPaginas ? 'disabled' : '' ?>">
                      <a class="page-link" 
                        href="index.php?controller=Contrato&action=listar&page=<?= $pagina+1 ?>&search=<?= urlencode($_GET['search'] ?? '') ?>&estado=<?= urlencode($_GET['estado'] ?? '') ?>">
                        Siguiente
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>