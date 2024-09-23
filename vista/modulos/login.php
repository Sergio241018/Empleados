<script src="vista/js/cl_usuario.js"></script>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="assets/images/logos/dark-logo.svg" width="180" alt="">
              </a>
              <p class="text-center">Your Social Campaigns</p>
              <form id="formLogin" class="needs-validation" novalidate>
                <div class="mb-3">
                  <label for="txt_email" class="form-label">Usuario</label>
                  <input type="email" class="form-control" id="txt_email" aria-describedby="emailHelp" required>
                  <div class="invalid-feedback">
                    Este campo es Requerido.
                  </div>
                </div>
                <div class="mb-4">
                  <label for="txt_password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="txt_password" required>
                  <div class="invalid-feedback">
                    Este campo es Requerido.
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <a class="text-primary fw-bold" href="./index.html">¿Olvido su Contraseña?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Iniciar Sesion</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="vista/js/login.js"></script>