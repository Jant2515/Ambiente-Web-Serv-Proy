<?php 

function links()
{
    echo '<title>Banco DEUF</title>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <!-- Mobile Metas -->
          <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
          <!-- Site Metas -->
          <meta name="keywords" content="">
          <meta name="description" content="">
          <meta name="author" content="">
          <!-- Site Icons -->
          <link rel="shortcut icon" href="#" type="image/x-icon" />
          <link rel="apple-touch-icon" href="#" />
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="css/bootstrap.min.css" />
          <!-- Pogo Slider CSS -->
          <link rel="stylesheet" href="css/pogo-slider.min.css" />
          <!-- Site CSS -->
          <link rel="stylesheet" href="css/style.css" />
          <!-- Responsive CSS -->
          <link rel="stylesheet" href="css/responsive.css" />
          <!-- Custom CSS -->
          <link rel="stylesheet" href="css/custom.css" />
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
          <script src="https://kit.fontawesome.com/a77e026872.js" crossorigin="anonymous"></script>';
}

function navBar()
{
    echo '<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Inicio del Header y Navbar -->
    <header class="top-header">
        <div class="header_top">
            
            <!-- Header -->
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                    <a class="navbar-brand" href="../index.php"><img src="images/logoN.png" width="200" height="70" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:BancoFide@gmail.com"><img src="images/mail_icon.png" alt="#" />BancoFide@gmail.com</a></li>
                            <li><a href="tel:+506-888-banco"><img src="images/phone_icon.png" alt="#" />+506-888-banco</a></li>
                            <li><a class="join_bt" href="">Ingresar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #193773;">
                   <nav class="navbar header-nav navbar-expand-lg"> 
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Navbar -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" style="color:#B8BCBF" href="../index.php">Inicio</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="acercaDe.php">Acerca de</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="#">Cambios</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="servicios.php">Servicios</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="#">Contacto</a></li>
                    </ul>
                </div>
                     </div>
                 </nav>
                 <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Buscar">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div> 
                </div>
            </div>
          </div>
        </div>
        
    </header>';
}

function fooTer()
{
  echo '<footer>
        <div class= "container__footer">
            <div class="box__footer">
                <div class="logo"
                    <img src="" alt="">
                </div>
                <div class="terms">
                    <p>El Banco es una entidad bancaria estatal de índole comercial que
                         opera en Costa Rica. Con un patrimonio de ¢253,574,654,782
                         y activos por ¢5,278,383,864,857, el banco se ha constituido como una de las más 
                         sólidas empresas bancarias de Costa Rica y de la región centroamericana.​</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Servicios Adicionales</h2>
                <a href="#">Desarrollo</a>
                <a href="#">Marketing</a>
                <a href="#">IOS</a>
                <a href="#">Android</a>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"><i class="fa-brands fa-square-facebook"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-square-twitter"></i>Twitter</a>
                <a href="#"><i class="fa-brands fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados @ 2022
            <b>Ambiente web C//S</p>
        </div>
    </footer>';
}

function allLinks()
{
  echo '<!-- ALL JS FILES -->
  <script src="js/jquery.min.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>';
}

function navBarIndex()
{
    echo '<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="View/images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Inicio del Header y Navbar -->
    <header class="top-header">
        <div class="header_top">
            
            <!-- Header -->
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                    <a class="navbar-brand" href="index.php"><img src="images/logoN.png" width="200" height="70" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:BancoFide@gmail.com"><img src="images/mail_icon.png" alt="#" />BancoFide@gmail.com</a></li>
                            <li><a href="tel:+506-888-banco"><img src="images/phone_icon.png" alt="#" />+506-888-banco</a></li>
                            <li><a class="join_bt" href="">Ingresar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #193773;">
                   <nav class="navbar header-nav navbar-expand-lg"> 
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Navbar -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" style="color:#B8BCBF" href="index.php">Inicio</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="View/acercaDe.php">Acerca de</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="#">Cambios</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="View/servicios.php">Servicios</a></li>
                        <li><a class="nav-link" style="color:#B8BCBF" href="#">Contacto</a></li>
                    </ul>
                </div>
                     </div>
                 </nav>
                 <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Buscar">
                    <a class="search-btn">
                        <img src="View/images/search_icon.png" alt="#" />
                    </a>
                </div> 
                </div>
            </div>
          </div>
        </div>
        
    </header>';
}

function allLinksIndex()
{
  echo '<!-- ALL JS FILES -->
  <script src="View/js/jquery.min.js"></script>
  <!-- ALL PLUGINS -->
  <script src="View/js/custom.js"></script>';
}