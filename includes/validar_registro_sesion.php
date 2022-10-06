<?php
// Informacion que valida el php de lo que entra por teclado de iniciarsesion.php
include('conecta.php');

$nombreusuario=trim($_POST['registro_usuario']);
$email =trim($_POST['registro_email']);
$contrasenia=trim($_POST['registro_contra']);
//$confirma=trim($_POST['registro_contra_confirma']);
//$fechareg=date("d/m/y");

$id_cargo='2';


$consulta_registro= "INSERT INTO usuarios (nombreusuario, ubicacion, contrasenia, id_cargo)
 VALUES ('$nombreusuario', '$email', '$contrasenia', '$id_cargo')";

$resultado=mysqli_query($conecta,$consulta_registro);

if ($resultado) {
    ?>
    <h3>Se registró correctamente</h3>

    <?php
}else{  //si el usuario nunca se registro se le reedirigirá a la misma pagina
    ?>
    <?php
    include("iniciarsesion.php");
?>
<h1 class="salio_mal"  >Error de registro</h1>
<?php
}


?>
