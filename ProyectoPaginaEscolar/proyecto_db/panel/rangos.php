<?php
session_start();
include "../includes/config.php";
include "../includes/funciones.php";

if(!isset($_SESSION['usuario'])) {
	header("Location: ../login.php");
}

if($_SESSION['rango'] == '1' or $_SESSION['rango'] == '3') {

ini_set('error_reporting',0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script language="JavaScript" type="text/javascript"> 
	<!-- 
	function Confirmar(frm) { 
	
	var borrar = confirm("¿Seguro que desea eliminar este usuario?"); 
	
	return borrar; //true o false 
	
	} 
	//--> 
</script> 
</head>

<body>

<blockquote>
  <p>
    <?php include "barra_navegador.php"; ?>	
    
    
    <?php
if(isset($_GET['borrar'])) {
	
	$user = mysqli_query($connect,"SELECT * FROM usuario WHERE id = '".$_GET['borrar']."'");
	$us=mysqli_fetch_array($user);
	
	$avatar = unlink("../".$us['avatar']."");
	
	$sql = mysqli_query($connect,"DELETE FROM usuario WHERE id = '".$_GET['borrar']."'");
	
}
?>
    
    <a href="agregarrango.php">Agregar Rango Nuevo</a>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</blockquote>
<table width="415" border="1">
  
  <thead>
      <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Color</td>
        <td>Opciones</td>
      </tr>
  </thead>

  <tbody>
<?php

	$query = mysqli_query($connect,"SELECT * FROM rango");
	
	while($row=mysqli_fetch_array($query)) { 
	
	?>

  <tr>
    <td width="4"><?php echo $row['id']; ?></td>
    <td width="4"><?php echo $row['nombre']; ?></td>
    <td width="4" style="color:<?php echo $row['color']; ?>"><?php echo $row['color']; ?></td>
    <td width="90"><a href="editarrango.php?id=<?php echo $row['id']; ?>">Editar</a> | <a href="editarusuario.php?borrar=<?php echo $row['id']; ?>" onclick="return Confirmar (this.form)">Borrar</a></td>
  </tr>

  <?php		
	
	}

?>
  </tbody>
</table>

</body>
</html>
<?php } ?>