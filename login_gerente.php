<?php
class index
{
  public function __construct()
  {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Magic Hat</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="img/magichat/icone.ico" rel="icon">
      <link href="img/magichat/icone.ico" rel="apple-touch-icon">
      <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

      <!-- Template Main CSS File -->
      <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

      <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>

      <!-- ======= Header ======= -->
      <header id="header" class="d-flex">
        <div class="container d-flex align-items-center justify-content-between">

          <div class="logo">
            <h1><img src="img/magichat/logo.png">
              <a href="#">Magic Hat</a></img>
            </h1>
          </div>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="index.php">Home</a></li>
              <li class="dropdown"><a href="#"><span>
                    <ion-icon id="person" name="person"></ion-icon>
                  </span> </a>
                <ul>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="login_gerente.php">Login - Gerente</a></li>
                  <li><a href="cadastro.php">Cadastre-se</a></li>
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

      <main id="main">

        <br><br><br>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <center>
            <div class="container">

              <div class="section-title" data-aos="zoom-out">
                <p>Login Gerente</p>
                <h2>Entre com o seu e-mail e senha</h2>
              </div>

              <div class="row mt-5">


                <center>
                  <div class="col-sm-4 mt-4 mt-lg-0" data-aos="fade-left">

                    <form method="post" action="controller/controller.php?funcao=admin" id="formLogin" name="formLogin">
                      <div class="row">

                        <div class="form-group mt-3">
                          <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Seu Usuário" required>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <div style="float:right;"><label for="inputSenha4" class="form-label test">Exibir senha</label>
                          <input name="checkbox" id="checkbox" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                        <input type="password" minlength="6" maxlength="8" placeholder="Sua senha" class="form-control" name="txtPass" required id="txtPass">
                      </div>

                      <br>
                      <br>

                      <div class="php-email-form text-center col-12">
                        <button type="submit" id="btnLogin">Login</button>
                      </div>


                    </form>
                  </div>

                </center>
              </div>
          </center>
        </section>
        <!-- End Contact Section -->

        <br><br>

      </main><!-- End #main -->



      <!-- ======= Footer ======= -->
      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="4" fill="rgba(161,30,29, .1)">
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="70" y="0" fill="rgba(161,30,29, .2)">
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="7" fill="#A11E1D">
        </g>
      </svg>


      <footer>

        <!-- Seção de Mídias Sociais -->
          <ul class="social_icon">
            <li><a href="https://twitter.com/MagicHatOficial">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li><a href="https://www.instagram.com/magic.hat.of/">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li><a href="https://www.linkedin.com/in/magic-hat-45bb81257">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
            <li><a href="https://www.facebook.com/profile.php?id=100088264081232">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
          </ul>


        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <!-- 1° Coluna -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

              <!-- Conteúdo sobre o Site -->

              <h3 class="fw-bold">
                Magic Hat
              </h3>

              <p>
                A Magic Hat é uma loja virtual de brinquedos que visa atender seus clientes de forma rápida, interativa, com
                qualidade em seu atendimento e produtos e, principalmente, com segurança.
              </p>
            </div>

            <!-- 3° Coluna -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links Desenvolvedores -->
              <h3 class="fw-bold">
                Desenvolvedores
              </h3>

              <p class="txtCenter">
                <a class="nav-link scrollto" href="https://github.com/joaopedro2602" target="_blank">João Pedro Cabral</a>
              </p>

              <p class="txtCenter">
                <a class="nav-link scrollto" href="https://github.com/MarianeBS" target="_blank">Mariane Souza</a>
              </p>

              <p class="txtCenter">
                <a class="nav-link scrollto" href="https://github.com/TamirisRC" target="_blank">Tamiris Carvalho</a>
              </p>

              <p class="txtCenter">
                <a class="nav-link scrollto" href="https://github.com/vek03" target="_blank">Victor Cardoso</a>
              </p>

              <p class="txtCenter">
                <a class="nav-link scrollto" href="https://github.com/VictordRoma" target="_blank">Victor Roma</a>
              </p>

            </div>

            <!-- 3° Coluna -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links Contato -->
              <h3 class="fw-bold">
                Contato
              </h3>
              <p>
                Endereço: Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo
              </p>

              <p>
                CEP: 01311-000
              </p>

              <p>
                Atendimento por: magichat@outlook.com
              </p>

              <p>
                Contato: (11) 69318-8308
              </p>

            </div>

          </div>

        </div>

        <p>©2022 Copyright <b>Magic Hat</b> | Todos os Direitos Reservados</p>
      </footer>

      <!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="vendor/aos/aos.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/glightbox/js/glightbox.min.js"></script>
      <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="vendor/swiper/swiper-bundle.min.js"></script>
      <script src="vendor/php-email-form/validate.js"></script>

      <!-- JQuery Files -->
      <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

      <!-- Template Main JS File -->
      <script src="js/main.js"></script>
      <script src="js/login.js"></script>

    </body>

    </html>
<?php
  }
}
new index();
?>