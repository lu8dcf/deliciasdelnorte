<?php 

// declarar variables donde tendrán los datos para la coneccion de la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "ejemplo";

$conecta = mysqli_connect($servidor,$usuario,$password,$bd);
if($conecta->connect_error){
    die("Error al conectar con la base de datos".$conecta->connect_error);
}

?>


