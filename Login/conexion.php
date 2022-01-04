<?php

$host = "localhost";
$usuario = "c2440492_carta";//c2440492_carta root
$clave = "96BEfugali";//96BEfugali
$bd =  "c2440492_carta";//c2440492_carta


//creo la conexion
$conexion = mysqli_connect($host, $usuario, $clave, $bd);

//compruebo si se conecto bien a la bd
if($conexion){
    echo "Conexion exitosa";
}else{
    echo "Conexion fallida";
}


?>