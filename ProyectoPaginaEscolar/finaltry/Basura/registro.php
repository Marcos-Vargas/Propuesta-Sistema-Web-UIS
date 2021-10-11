
<?php 
session_start();
include "includes/config.php";
include "includes/funciones.php";

ini_set ('error_reporting',0);

?>

<form name="form1" method="post" action="">
  <p>Usuario: 
    <label for="textfield"></label>
    <input type="text" name="usuario" >
  </p>
  <p>
    
    <label for="textfield2"></label>
    Contraseña: 
    <input type="password" name="contrasena" >
  </p>
  <p>
    <input type="submit" name="guardar" value="registrarse">
  </p>
</form>

<?php 

if ($_POST['guardar']){
	
$usuario = clean($_POST['usuario'])	;
$contrasena = md5($_POST['contrasena']);

$c = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM usuario WHERE usuario = '$usuario'"));

if ($c == 1) {echo "El nombre de usuario esta en uso, porfavor escoge otro gracias";}

else {
	
	$r = mysqli_query($connect,"INSERT INTO usuario (usuario,contrasena) values ('$usuario','$contrasena')");
	if ($r){echo "Felicidades, $usuario te has registrado con extito";/* es este luhar es para redireccionar*/}
	}
}

?>
