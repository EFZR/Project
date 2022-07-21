<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../menu/style.css">
  <link rel="stylesheet" href="../css/style2.0.css">
  <title>Login</title>
  <link rel="icon" href="../img/bg-img/logo.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
</head>

<body>
  <header>
    <header class="header-area">
      <!-- Navbar -->
      <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
          <div class="container ">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="academyNav">
              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
              </div>
              <!-- Menu -->
              <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                  <div class="academy-logo">
                    <a href="../index.php"><img src="../img/bg-img/logo.png" alt="" width="120"></a>
                  </div>
                  <ul>
                    <li><a href="../menu/Modulos.php">Módulos o Servicios</a></li>
                    </li>
                    <li><a href="../menu/about-us.php">Sobre Nosotros</a></li>
                    <li><a href="../menu/contact.php">Contactanos</a></li>
                  </ul>
                </div>
                <!-- Nav End -->
              </div>
              <!-- Calling Info -->
              <div class="calling-info">
                <div class="call-center">
                  <a href="loginform.php"><i class="icon-house"></i> <span>INICIAR SESIÓN</span></a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <br> </br>
    <div class="login-container">
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <div class="login-info-container">
        <div class="social-login">
          <div class="login-element"></div>
        </div>

        <br> </br>

        <form action="validar.php" method="post" class="inputs-container" style="position:relative;">
          <img src="../img/loginUser.png" width="150">
          <br></br>
          <div style="display: flex; ">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="44"
              height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="12" cy="12" r="9" />
              <circle cx="12" cy="10" r="3" />
              <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
            </svg>
            <input class="input" type="text" placeholder="Usuario" name="Usuario" required>
          </div>
          <br></br>
          <div style="display: flex;">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-square" width="44"
              height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="8" y="11" width="8" height="5" rx="1" />
              <path d="M10 11v-2a2 2 0 1 1 4 0v2" />
              <rect x="4" y="4" width="16" height="16" rx="2" />
            </svg>
            <input class="input" type="password" placeholder="Contraseña" name="Contrasenia" required>
          </div>
          <br></br>
          <input name="submit" class="btn" type="submit" value="Iniciar Sesion ">
          <br></br>
          <a class="small" href="../restablecerContra.php">¿Has olvidado tu contraseña?</a>
        </form>
      </div>

      <img class="image-container" src="../img/img1.png" alt="">

      <BR> </BR>
      <BR> </BR>
      <BR> </BR>
      <BR> </BR>
      <BR> </BR>
      <BR> </BR>

    </div>
    <!-- #####  Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>


</html>