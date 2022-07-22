<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>COPAP - CONTROL DE PLANILLAS DE PAGO</title>

  <!-- Favicon -->
  <link rel="icon" href="../img/bg-img/logo.png">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../css/estilosValidacion.css">
  <link rel="stylesheet" href="../css/style2.0.css">

</head>

<body>
  <!-- ##### Preloader ##### -->
  <div id="preloader">
    <i class="circle-preloader"></i>
  </div>

  <!-- ##### ENCABEZADO ##### -->
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="academy-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
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


                  <li><a href="about-us.php">Sobre Nosotros</a></li>
                  <li><a href="contact.php">Contactanos</a></li>
                </ul>
              </div>
              <!-- Nav End -->
            </div>

            <!-- LLAMA YA! -->
            <div class="calling-info">
              <div class="call-center">
                <a href="tel:+504 9986 1858"><i class="icon-telephone-2"></i> <span>(+504) 9986 1858</span></a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <br></br>
  <br></br>
  <!-- ##### FIN DEL ENCABEZADO ##### -->

  <!-- ##### Breadcumb Area Start ##### -->
  <div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
      <h2>CONTACTANOS</h2>
    </div>
  </div>
  <!-- ##### Breadcumb Area End ##### -->

  <!-- ##### Google Maps ##### -->

  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contact-content">
            <div class="row">
              <!-- Contact Information -->
              <div class="col-12 col-lg-5">
                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                  <div class="section-heading text-left">
                    <span>COPAP</span>
                    <div style="text-align:center; margin: top 200px;">
                      <h3>CONTACTANOS</h3>
                      <hr style="border:none;">
                      <img src="../img/contactanosC.png" alt="" width="200">
                      <hr>
                    </div>


                    <h class="mt-30">Envianos un correo electrónico y con gusto te atenderemos resolviendo todas tus dudas</h>


                  </div>
                  <!-- Single Contact Info -->
                  <div class="single-contact-info d-flex">
                    <div class="contact-icon mr-15">
                      <i class="icon-contract"></i>
                    </div>
                    <h>copapbandersnatch@gmail.com</h>
                  </div>
                </div>
              </div>
              <!-- Contact Form Area -->
              <div class="col-12 col-lg-7">
                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                  <form class="formulario_contacto" id="formulario"
                    action="https://formsubmit.co/copapbandersnatch@gmail.com" method="post">

                    <!--Grupo: Primer Nombre-->
                    <div class="formulario__grupo" id="grupo__nombre_contactanos">
                      <label for="nombre_contactanos" class="formulario__label">Nombre Completo</label>
                      <div class="formulario__grupo-input">

                        <input type="text" class="formulario__input" name="nombre_contactanos" id="nombre_contactanos"
                          title="Ingresa su nombre completo" onkeypress="return soloLetras(event)"
                          placeholder="Nombre Completo" required minlength="12" maxlength="50">

                      </div>
                      <p class="formulario__input-error">Este tiene que ser de 12 a 50 dígitos y solo puede contener
                        letras.</p>
                    </div>

                    <div class="formulario__grupo" id="grupo__correo">
                      <label for="Correo" class="formulario__label">Correo Elecronico</label>
                      <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="Correo" id="Correo"
                          title="Ingresa el correo elecctronico" placeholder="Correo Electronico"
                          pattern="[a-z0-9_]+([.][a-z0-9_]+)*@[a-z0-9_]+([.][a-z0-9_]+)*[.][a-z]{1,5}" required
                          minlength="12" maxlength="50" onblur="lowerCase('Correo')">
                      </div>

                      <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guión bajo.

                      </p>
                    </div>

                    <div class="formulario__grupo" id="grupo__Mensaje">
                      <label for="Mensaje" class="formulario__label">Mensaje</label>
                      <div class="formulario__grupo-input">
                        <textarea class="formulario__input" name="Mensaje" id="Mensaje" placeholder="Ingresa un mensaje"
                          cols="30" rows=50 minlength="8" maxlength="150" required></textarea>
                      </div>
                      <div id="contador">0/150</div>
                      <p class="formulario__input-error">Este tiene que ser de 12 a 50 dígitos y solo puede contener
                        letras.</p>
                    </div>

                    <button class="btn academy-btn mt-30 formulario__btn" type="submit">Enviar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->

  <!-- ##### INFO  ##### -->
  <footer class="footer-area">
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
    </ul>
    <div class="main-footer-area section-padding-100-0">
      <div class="container">
        <div class="row">
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-100">
              <div style="text-align: center;" class="widget-title">
                <!-- <a href="#"><img src="../img/bg-img/logo.png" alt=""></a> -->
                <a href="#"><img src="../img/QR.png" width="200px"></a>
                <p>¡ESCANEAME PARA MÁS INFORMACIÓN!</p>
              </div>
              <div class="footer-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-100">
              <div class="widget-title">
                <h6>DESARROLLADORES</h6>
              </div>
              <nav>
                <ul class="useful-links">
                  <li><a href="#">EMERSON ZAPATA</a></li>
                  <li><a href="#">DENIS GARCIA</a></li>
                  <li><a href="#">DULCE SANCHEZ</a></li>
                  <li><a href="#">ONAN AGUILERA</a></li>
                  <li><a href="#">DIEGO MOLINA</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-100">
              <div class="widget-title">

              </div>
            </div>
          </div>
          <!-- contactos-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-100">
              <div class="widget-title">
                <h6>Contactanos</h6>
              </div>
              <div class="single-contact d-flex mb-30">
                <i class="icon-placeholder"></i>
                <p>Tegucigalpa,Honduras</p>
              </div>
              <div class="single-contact d-flex mb-30">
                <i class="icon-telephone-1"></i>
                <p>2446 6349</p>
              </div>
              <div class="single-contact d-flex">
                <i class="icon-email"></i>
                <p>copapbandersnatch@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
              document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                aria-hidden="true"></i> by <a href="" target="_blank">COPAP</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### contactos ##### -->

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
  <!-- Scripts Validacion de Formulario -->
  <script src="../js/formulario.js"></script>
  <script>
  const mensaje = document.getElementById('Mensaje');
  const contador = document.getElementById('contador');

  mensaje.addEventListener('input', function(e) {
    const target = e.target;
    const longitudMax = target.getAttribute('maxlength');
    const longitudAct = target.value.length;
    contador.innerHTML = `${longitudAct}/${longitudMax}`;
  });
  </script>
</body>

</html>