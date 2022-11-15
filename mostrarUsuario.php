<?php

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basico -->

<head>
    <title>Banco DEUF</title>
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


</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!--END LOADER -->

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
                            <li><a href="mailto:exchang@gmail.com"><img src="images/mail_icon.png" alt="#" />BancoFide@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="images/phone_icon.png" alt="#" />+506-888-banco</a></li>
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
                                        <li><a class="nav-link" style="color:#B8BCBF" href="about.html">Acerca de</a></li>
                                        <li><a class="nav-link" style="color:#B8BCBF" href="exchange.html">Cambios</a></li>
                                        <li><a class="nav-link" style="color:#B8BCBF" href="servicios.php">Servicios</a></li>
                                        <li><a class="nav-link" style="color:#B8BCBF" href="contact.html">Contacto</a></li>
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
    </header>
    <!-- Fin del header -->

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?> </li>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="mantUsuario.php">Usuarios</a></li>
            </ol>

            <div class="templatemo-panels">

                <br/><br/>
                <input type="hidden" value="<?php echo $datos["id"] ?>" id="txtId" name="txtId">

                <div class="col-md-12">

                    <div class="row form-group">
                        <div class="col-md-1 margin-bottom-15">
                        </div>

                        <div class="col-md-3 margin-bottom-15">
                            <label class="control-label">CÃ©dula</label>
                            <input type="text" class="form-control" id="txtCedula" name="txtCedula" autocomplete="Off" required readonly="readonly"
                            value="<?php echo $datos["cedula"] ?>">
                        </div>

                        <div class="col-md-3 margin-bottom-15">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" autocomplete="Off" required 
                            value="<?php echo $datos["nombre"] ?>">
                        </div>

                        <div class="col-md-3 margin-bottom-15">
                            <label class="control-label">Correo</label>
                            <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" autocomplete="Off" required
                            value="<?php echo $datos["correo"] ?>">
                        </div>

                        <div class="col-md-1 margin-bottom-15">
                        </div>
                    </div>

                </div>


                <div class="col-md-12">

                    <div class="row form-group">
                        <div class="col-md-1 margin-bottom-15">
                        </div>

                        <div class="col-md-3 margin-bottom-15">
                            <label class="control-label">Tipo Usuario</label>
                            <select class="form-control" id="cboTipoUsuario" name="cboTipoUsuario" autocomplete="Off" required>
                                <?php 
                                ListarTiposUsuario($datos["tipoUsuario"]); 
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1 margin-bottom-15">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    modal();
    ?>
   <!-- Inicio Footer -->
   <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo" <img src="" alt="">
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
                <b>Ambiente web C//S
            </p>
        </div>
    </footer>
    <!-- Fin del Footer -->
    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>