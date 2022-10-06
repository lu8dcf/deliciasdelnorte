<?php
// Informacion que valida el php de lo que entra por teclado de iniciarsesion.php
include('conecta.php');
 
$usuario=trim($_POST['ingreso_usuario']); // el TRIM anula los espacios entre el inicio y el final
$contrasenia=trim($_POST['ingreso_password']);

// Abrir una sesion

session_start(); //metodo para crear un inicio de sesion
$_SESSION['usuario']=$usuario;


// Consulta a la base de datos  si el usuario e identificacion o contraseña son los mismos

$consulta="SELECT * FROM usuarios where nombreusuario='$usuario' and contrasenia='$contrasenia'";
$resultado=mysqli_query($conecta,$consulta);


//$filas=mysqli_num_rows($resultado); sirve para verificar una fila 

$filas=mysqli_fetch_array($resultado);

if($filas){ // Primero verifica que el usuario este registrado en la base de datos ty luego verifica si es admin o cliente
        if($filas['id_cargo']==1){ //administrador
                header("location:../index.php"); //se usa LOCATION para redirigir al usuario a la vista correspondiente

        }else if($filas['id_cargo']==2){ //cliente
                header("location:../vistas/hola.html");
        }

}else{  //si el usuario nunca se registro se le reedirigirá a la misma pagina
        ?>
        <?php
        include("iniciarsesion.php");
    ?>
    <h1 class="salio_mal"  >Error de validacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conecta);


