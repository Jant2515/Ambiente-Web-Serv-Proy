<?php
include_once __DIR__ . '\generales.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basico -->

<head>
    <?php
    links();
    ?>
</head>

<body>
    <?php
    navBar();
    ?>
    <div class="bodyServices">
        <div class="containergg">
            <div class="caja">
                <div class="icon">01</div>
                <div class="content">
                    <h3>Depositos</h3>
                    <p class="p">Realizar depositos</p>
                    <br>
                    <a class="btn btn-primary" href="#" role="button" style="background-color: #193773; border-color: #193773">Mostrar Mas</a>
                </div>
            </div>
            <div class="caja">
                <div class="icon">02</div>
                <div class="content">
                    <h3>Tranferencia</h3>
                    <p class="p">Realizar tranferencia</p>
                    <br>
                    <a class="btn btn-primary" href="#" role="button" style="background-color: #193773; border-color: #193773">Mostrar Mas</a>
                </div>
            </div>
            <div class="caja">
                <div class="icon">03</div>
                <div class="content">
                    <h3>Cita</h3>
                    <p class="p">Adquirir Cita</p>
                    <br>
                    <a class="btn btn-primary" href="#" role="button" style="background-color: #193773; border-color: #193773;">Mostrar Mas</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bodyServices">
        <div class="containergg">
            <div class="caja">
                <div class="icon">04</div>
                <div class="content">
                    <h3>Crear Cuenta</h3>
                    <p class="p">Crear una Nueva Cuenta</p>
                    <br>
                    <a class="btn btn-primary" href="agregarUsuario.php" role="button" style="background-color: #193773; border-color: #193773">Mostrar Mas</a>
                </div>
            </div>
            <div class="caja">
                <div class="icon">05</div>
                <div class="content">
                    <h3>Editar Cuenta</h3>
                    <p class="p">Editar Informacion de la cuenta</p>
                    <br>
                    <a class="btn btn-primary" href="editarUsuario.php" role="button" style="background-color: #193773; border-color: #193773">Mostrar Mas</a>
                </div>
            </div>
            <div class="caja">
                <div class="icon">06</div>
                <div class="content">
                    <h3>Cambio de Divisas</h3>
                    <p class="p">Realizar Cambio de Divisas</p>
                    <br>
                    <a class="btn btn-primary" href="#" role="button" style="background-color: #193773; border-color: #193773;">Mostrar Mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio Footer -->
    <footer>
        <?php
        fooTer();
        ?>
    </footer>
    <?php
    alllinks();
    ?>
</body>

</html>