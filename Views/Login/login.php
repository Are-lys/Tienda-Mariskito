

<!DOCTYPE html>
<html lang="es">
<style>
.material-half-bg{
  background-color: #e7e7e7;

}
body {
  background: #e0f7fa;
  position: relative;
  min-height: 100vh;
  overflow-x: hidden;
  z-index: 0;
}

/* Ola superior */
body::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 180px;
  background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1440 180" xmlns="http://www.w3.org/2000/svg"><path fill="%23003049" fill-opacity="1" d="M0,96L40,80C80,64,160,32,240,26.7C320,21,400,43,480,64C560,85,640,107,720,96C800,85,880,43,960,42.7C1040,43,1120,85,1200,106.7C1280,128,1360,128,1400,128L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"/></svg>');
  background-size: cover;
  background-repeat: no-repeat;
  z-index: -1;
}

/* Ola inferior principal */
body::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 200px;
  background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg"><path fill="%23003049" fill-opacity="1" d="M0,192L60,186.7C120,181,240,171,360,165.3C480,160,600,160,720,165.3C840,171,960,181,1080,170.7C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"/></svg>');
  background-size: cover;
  background-repeat: no-repeat;
  z-index: -1;
}


</style>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/logo-mariskito.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    <section>
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1 style="color:black"><?= $data['page_title']; ?></h1>
      </div>
      <div class="login-box">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        <form class="login-form" name="formLogin" id="formLogin" action="">
         <h4 class="login-head"></i>INGRESE SUS CREDENCIALES</h4>
          <div class="form-group">
            <label for="txtEmail" class="control-label">USUARIO</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Correo electrónico" autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="txtPassword" class="control-label">CONTRASEÑA</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
              <div class="input-group-append">
                <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                  <i class="fa fa-eye" id="iconPassword"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip" style="color: #000">¿Olvidaste tu contraseña?</a></p>
            </div>
          </div>
          <div id="alertLogin" class="text-center"></div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
          </div>
        </form>
        <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">
          <h4 class="login-head">¿Olvidaste tu contraseña?</h4>
          <div class="form-group">
            <label for="txtEmailReset" class="control-label">EMAIL</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              </div>
              <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Correo electrónico">
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip" style="color: #000"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
          </div>
        </form>
      </div>
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>

<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('txtPassword');
  const icon = document.getElementById('iconPassword');

  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    // Cambiar el icono
    icon.classList.toggle('fa-eye');
    icon.classList.toggle('fa-eye-slash');
  });
</script>
