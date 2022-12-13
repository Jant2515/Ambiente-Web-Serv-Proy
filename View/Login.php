<?php
include_once 'ConnBD.php';
?>

<Html:5>
<link rel="stylesheet" href="Login.css">

<form action="action_page.php" method="post">
<img src="Images/logoN.png" alt="Logologin" class="Logologin">
  <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" id="Usu" placeholder="Enter Username" name="Usuario" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" id="conT" placeholder="Enter Password" name="psw" required>

    <button id="Entr" type="submit" disabled>Ingresar</button>
    <label>
      <input type="checkbox" id="TyC" checked="checked" name="remember">Terminos y condiciones
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancelar</button>
 <script src="Login.js"></script>
    <span class="psw">Recuperar <a href="Olvido">mi contraseña?</a></span>
  </div>
</form>

</Html:5>