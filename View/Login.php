<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Ambiente-Web-Serv-Proy/View/css/Login.css" rel="stylesheet" type="text/css">';
    <title>Document</title>
</head>
<body>
<form action="action_page.php" method="post">
<img src="Images/logoN.png" alt="Logologin" class="Logologin">
  <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" id="Usu" placeholder="Enter Username" name="txtUsuario" autocomplete="off" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" id="conT" placeholder="Enter Password" name="txtContrasenna" autocomplete="off" required>

    <button id="Entr" type="submit">Ingresar</button>
    <label>
      <input type="checkbox" id="Terminos" checked="checked" name="remember">Terminos y condiciones
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button id="" type="submit" class="cancelbtn"  href="index.php">Cancelar</button>
    <span class="psw">Recuperar <a href="Olvido">mi contraseña?</a></span>
  </div>
</form>


</body>

</html>