<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cambio de contraseña</title>

  <!-- FUENTES-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- CSS-->
  <link href="css/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilosValidacion.css">

</head>

<body class="bg-gradient-primary">
  <?php
  $Usuario = $_GET['idUsuario'];
  $Empresa = $_GET['Empresas_idEmpresas'];

  include 'SqlTools/database.php';
  $auxiliar = new database();
  $auxiliar->select('usuarios', 'Usuario', "idUsuario = '$Usuario'");
  $nombre = $auxiliar->sql;
  $name = mysqli_fetch_assoc($nombre);
  ?>
  <!-- Contenido de la página de inicio -->
  <div class="container">
    <!-- Fila exterior -->
    <div class="row justify-content-center">
      <div class="col-xl-20 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Fila anidada dentro del cuerpo de la tarjeta -->
            <div style="text-align:center;">
              <div class="p-5">
                <!--Inicio de Form-->
                <div class="container-fluid">
                  <h1 class="h3 mb-1 text-gray-800">Cambio de contraseña</h1>
                </div>
                <img src="img/restablecerContra.png" alt="" height="100"></img>
                <form class="formulario" id="formulario" method="post">
                  <!--Grupo: Contraseña 1-->
                  <div class="formulario__grupo" id="grupo__contraseña">
                    <hr>
                    <div class="formulario__grupo-input">
                      <input type="text" class="formulario__input" name="contraseña" id="contraseña" title="Ingresa contraseña nueva" placeholder="Contraseña nueva" required minlength="8" maxlength="15">
                    </div>
                    <p class="formulario__input-error">La contraseña debe contener entre 8 a 15 dígitos.</p>
                  </div>
                  <!--Grupo: Contraseña 2-->
                  <div class="formulario__grupo" id="grupo__contraseña2">
                    <hr>
                    <div class="formulario__grupo-input">
                      <input type="text" class="formulario__input" name="contraseña2" id="contraseña2" title="Repetir contraseña" placeholder="Repetir contraseña" required minlength="8" maxlength="15">
                    </div>
                    <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                  </div>
                  <!--Submit-->
                  <div class="formulario__grupo" id="grupo__departamento">
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" title="Click si el formulario esta listo para guardar" value="Guardar">
                  </div>
                  <!--Limpiar-->
                  <div class="formulario__grupo" id="grupo__departamento">
                    <input type="Reset" class="btn btn-primary btn-user btn-block" title="Click si desea limpiar todos los campos" value="Limpiar">
                  </div>
                  <!--Cancelar-->
                  <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <div class="col-sm-6 mb-3 mb-sm-0" style=" width: 50vw; margin-left : 0vw;">
                      <a title="Click si no desea hacer ni una acción" href="javascript:history.back()" class="btn btn-primary btn-user btn-block">
                        Cancel
                      </a>
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