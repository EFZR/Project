<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Planilla de Pagos</title>

  <!-- FUENTE-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- CSS-->
  <link href="css/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilosValidacion.css">

</head>

<body class="bg-gradient-primary">

  <!-- Contenido de la página de inicio -->
  <div class="container">

    <!-- Fila exterior -->
    <div class="row justify-content-center">

      <div class="col-xl-20 col-lg-12 col-md-10">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Fila anidada dentro del cuerpo de la tarjeta -->
            <div style="text-align:center;">
              <div class="p-5">

                <!--Inicio de Form-->
                <h1 class="h4 text-gray-900 mb-2 text-center">¿Olvido su contraseña?</h1>
                <p class="mb-4 ">Lo entendemos, pasan cosas. ¡Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña!</p>
                <img src="img/restablecerContra.png" alt="" height="100">
                <form action="https://formsubmit.co/copapbandersnatch@gmail.com" class="formulario2" id="formulario" method="post">
                  <!--Grupo: Correo-->
                  <div class="formulario__grupo" id="grupo__correo">
                    <hr>
                    <div class="formulario__grupo-input">
                      <input type="email" class="formulario__input" name="Correo" id="Correo" title="Ingresa el correo elecctronico" placeholder="Correo Electronico" pattern="[a-z0-9_]+([.][a-z0-9_]+)*@[a-z0-9_]+([.][a-z0-9_]+)*[.][a-z]{1,5}" required minlength="12" maxlength="50" onblur="lowerCase('Correo')">
                    </div>
                    <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guión bajo.</p>
                  </div>
                  <!--Submit-->
                  <div class="formulario__grupo" id="grupo__correo">
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" title="Click si el formurio esta listo para guardar" value="Enviar">
                    <hr>
                    <div class="text-center">
                      <div class="col-sm-200 mb-3 mb-sm-0">
                        <a class="small " href="Login/loginForm.php">¿Ya tienes un usuario? Inicia sesión</a>
                      </div>
                    </div>
                  </div>

              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- JavaScript básico de Bootstrap-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Complemento principal de JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas las páginas-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Scripts Validacion de Formulario -->
  <script src="js/formulario.js"></script>

</body>

</html>