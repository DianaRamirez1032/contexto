
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <meta name="theme-color" content="#ffffff" />
    <!-- Color modes -->
    <script src="src/assets/js/vendors/color-modes.js"></script>
    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap" />
    <!-- build:css ./assets/css/theme.min.css -->
    <link rel="stylesheet" href="src/assets/css/theme.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

  <body>
    <main class="d-flex flex-column justify-content-center vh-100">
      <!--Sign up start-->
      <section>
        <div class="container">
          <div class="row mb-8">
            <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" 
                    fill="currentColor" style="color: #0d6efd;"
                    class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                    d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z" />
                </svg>
                <span class="fw-bold fs-4 site-logo-text" style="color: #0d6efd;">
                    LegalContracts
                </span>
                <br><br>
                <h1 class="mb-1">Bienvenido de Nuevo</h1>
                </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-12">
              <div class="card card-lg mb-6">
                <div class="card-body p-6">
                  <form class="needs-validation mb-6" novalidate method="POST" action="../Views/index.php?action=login">
                    <div class="mb-3">
                      <label for="signinEmailInput" class="form-label">Email</label>
                      <input type="email" id="signinEmailInput" name="email" class="form-control" required />
                    </div>
                    <div class="mb-3">
                      <label for="formSignUpPassword" class="form-label">Contraseña</label>
                      <div class="password-field position-relative">
                        <input type="password" id="formSignUpPassword" name="password" class="form-control" required />
                        <span><i class="ti ti-eye-off passwordToggler"></i></span>
                      </div>
                    </div>
                    <div class="d-grid">
                      <button class="btn btn-primary" type="submit">Ingresar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Sign up end-->
      <div class="position-absolute end-0 bottom-0 m-4">
        <div class="dropdown">
          <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-highlights" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-8 5v1H4.5a.5.5 0 0 0-.093.009A7 7 0 0 1 3.1 13zm0-1H2.255a7 7 0 0 1-.581-1H8zm-6.71-2a7 7 0 0 1-.22-1H8v1zM1 8q0-.51.07-1H8v1zm.29-2q.155-.519.384-1H8v1zm.965-2q.377-.54.846-1H8v1zm2.137-2A6.97 6.97 0 0 1 8 1v1z"/>
            </svg>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                <i class="ti theme-icon ti ti-sun"></i>
                <span class="ms-2">Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <i class="ti theme-icon ti-moon-stars"></i>
                <span class="ms-2">Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                <i class="ti theme-icon ti-circle-half-2"></i>
                <span class="ms-2">Auto</span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </main>

    <?php if (isset($error)) : ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: '<?php echo $error; ?>',
          confirmButtonColor: '#0d6efd'
        });
      </script>
    <?php endif; ?>
  </body>
</html>
