<?php
//Para iniciar dejar la sesion iniciada
if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\UsuarioModel.php';

//Esto es en el scrip del boton ingresar del login
if(isset($_POST["btnIngresar"]))
{
    $cedula = $_POST["txtIdentificacion"];
    $contrasenna = $_POST["txtPass"];

    $datos = ValidarUsuarioModel($cedula, $contrasenna);   
        
    if($datos -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($datos);
        $_SESSION["sesionNombre"] = $datosUsuario["nombre"];
        $_SESSION["sesionTipoUsuario"] = $datosUsuario["tipoUsuario"];
        header("Location: View\mantUsuario.php");
    }
    else
    {
        header("Location: ..\index.php");
    }
}

//El listar un usuario en mantenimiento de editar
function ListarUsuarios()
{
    $datos = ListarUsuariosModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<tr>';
            echo '<td>' . $fila["cedula"] . '</td>';
            echo '<td>' . $fila["nombre"] . '</td>';
            echo '<td>' . $fila["correo"] . '</td>';
            echo '<td>' . $fila["descripcion"] . '</td>';
            echo '<td>' . $fila["descripcion_estado"] . '</td>';    
            echo '<td><a href="mantUsuarioEditar.php?q=' . $fila["id"] . '">Editar<a/></td>';
            echo '</tr>';
        }
    }
}


//Dependiendo del roll asi se le mostrara el menu
function ValidarOpcionesMenu()
{
    $tipo = $_SESSION["sesionTipoUsuario"];
    $datos = ValidarOpcionesMenuModel($tipo);   

    echo '<div class="template-page-wrapper">
          <div class="navbar-collapse collapse templatemo-sidebar">
          <ul class="templatemo-sidebar-menu">';

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="' . $fila["redireccion"] . '"><i class="' . $fila["icono"] . '"></i>' . $fila["texto"] . '</a></li>';
        }
    }

    echo '<li><a href="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
          </ul>
          </div>';
}

//Aca es el procedimiento de lista desplegable de seleccionar el tipo de usuario a ingresar
function ConsultarDatosUsuario($id)
{
    $datos = ConsultarDatosUsuarioModel($id);   
    return mysqli_fetch_array($datos);
}

function ListarTiposUsuario($tipo)
{
    $datos = ListarTiposUsuarioModel();   

    if($datos -> num_rows > 0)
    { 
        echo '<option selected value=""> Selecccione </option>';
        
        while($fila = mysqli_fetch_array($datos))
        {  
            if($tipo == $fila["tipoUsuario"])
                echo '<option selected value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
            else
                echo '<option value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
        }
    }
}

//El boton de actualizar (Guardar en el editar)
if(isset($_POST["btnActualizar"]))
{
    $Nombre = $_POST["txtNombre"];
    $Contrasenna = $_POST["txtContrasenna"];
    $Correo = $_POST["txtCorreo"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $Id = $_POST["txtId"];

    ActualizarUsuarioModel($Nombre, $Contrasenna, $Correo, $TipoUsuario, $Id);  
    header("Location: MantUsuario.php");  
}


//El guardar en BD

if(isset($_POST["btnGuardar"]))
{   
    $Nombre = $_POST["txtNombre"];
    $cedula= $_POST["txtCedula"];
    $Contrasenna = $_POST["txtContrasenna"];
    $Correo = $_POST["txtCorreo"];
    $TipoUsuario = $_POST["cboTipoUsuario"];

    GuardarUsuarioModel($Nombre,$cedula, $Contrasenna, $Correo, $TipoUsuario);  
    header("Location: MantUsuario.php");  
}


?>