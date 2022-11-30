<?php
include_once __DIR__ . '/generales.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    links();
    ?>
</head>

    <body>

    <form role="form" action="" method="post">
        <?php
        navBar();
        ?>
            <input type="hidden" name="" id="" value="">

            <div class="card">
                <div class="card-header">
                    <div class="row display-tr">
                        <h3>Transferencia en línea</h3>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                Nombre 
                            </label>
                            <input value="" data-conekta="card[name]" class="form-control" name="name" id="name"  type="text" >
                        </div>
                        <div class="col-md-6">
                                <label>
                                    Número de tarjeta
                                </label>
                                <input value="" name="card" id="card" data-conekta="card[number]" class="form-control"   type="text" maxlength="16" >
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <label>
                                    CVC
                                </label>
                                <input value="" data-conekta="card[cvc]" class="form-control"  type="text" maxlength="4" >
                            </div>
                            <div class="col-md-6">
                                    <label>
                                        Fecha de expiración (MM/AA)
                                    </label>
                                    <div>
                                        <input style="width:50px; display:inline-block" value="" data-conekta="card[exp_month]" class="form-control"  type="text" maxlength="2" >
                                        <input style="width:50px; display:inline-block" value="" data-conekta="card[exp_year]" class="form-control"  type="text" maxlength="2" >

                                    </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><span>Cuenta destino</span></label>
                            <input class="form-control" type="text" name="email" id="email" maxlength="200" value="">
                        </div>
                        <div class="col-md-4">
                            <label>Monto</label>
                            <input class="form-control" type="text" name="description" id="description" maxlength="100" value="">
                        </div>
                        <div class="col-md-4">
                            <label>Motivo</label>
                            <input class="form-control" type="number" name="total" id="total" value="">
                        </div>
                       
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-12" style="text-align:center;">
                               <button class="btn btn-success btn-lg">
                                   <i class="fa fa-check-square"></i> PAGAR
                               </button>
                            </div>
                          
                    </div>

                </div>
            </div>
           
            
        </form>
        <footer>
        <?php
        fooTer();
        ?>
    </footer>
    <?php
    allLinks();
    ?>
    </body>


</html>