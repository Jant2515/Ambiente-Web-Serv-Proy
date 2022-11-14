<?php

include_once 'ConnBD.php';

//Para ingresar el usuario en el index
function ValidarUsuarioModel($cedula, $contrasenna)
{
    $enlace = OpenDB();

    $procedimiento = "call consultarUsuario('$cedula', '$contrasenna');";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//
function ListarUsuariosModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarUsuarios();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Depende del roll asi poder ingresar
function ValidarOpcionesMenuModel($tipoUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarMenu($tipoUsuario);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para consultar la info del usuario
function ConsultarDatosUsuarioModel($id)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarUsuarioId($id);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para mostrar usuarios en db
function ListarTiposUsuarioModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTiposUsuaurio();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para el editar usuario
function ActualizarUsuarioModel($Nombre,$Contrasenna,$Correo,$TipoUsuario,$Id)
{
    $enlace = OpenDB();

    $procedimiento = "call ActualizarUsuario('$Nombre','$Contrasenna','$Correo',$TipoUsuario,$Id);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

//Para guardar un usuario nuevo 
function GuardarUsuarioModel($Nombre,$cedula,$Contrasenna,$Correo,$TipoUsuario, $Celular, $Direccion)
{
    $enlace = OpenDB();

    $procedimiento = "call GuardarUsuario('$Nombre','$cedula','$Contrasenna','$Correo',$TipoUsuario, '$Celular', '$Direccion');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}


?>
