<?php

//llamo a la bd

require 'conexion.php';


//comienzo con la sesion
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['contrasenia'];


//creo la query

$q = "SELECT COUNT(*) as contar FROM usuarios WHERE username = '$usuario' AND password = '$clave'";


//genero la consulta
$consulta = mysqli_query($conexion, $q);
//guardo los datos que trae la consulta en un arreglo
$array = mysqli_fetch_array($consulta);

//compruebo que el usuario existe dentro del array
if( $array['contar'] > 0 ){
    //si existe, inicio la sesion
    $_SESSION['usuario'] = $usuario;
    //redirecciono al usuario a la pagina principal
    header('Location: ../admin/index.php');
}else{
    //si no existe, lanzo un alert de que no existe el usuario o la contraseña
    echo '<script>alert("Usuario o contraseña incorrectos");</script>';
    //espero 2 segundos
    echo '<script>setTimeout(function(){window.location="../login.php";}, 100);</script>';


   //readirecto al usuario a la pagina de login
    //header('location: ../login.php');
}





?>