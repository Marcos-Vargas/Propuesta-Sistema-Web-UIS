<?php
session_start();
include "includes/config.php";
include "includes/funciones.php";

if(isset($_SESSION['usuario'])) {
	header("Location: index.php");
}

ini_set('error_reporting',0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="css/bootstrap.css" >
  <link rel ="stylesheet" href="css/style2.css" >
      <!-- Font Icon -->
      <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

      <!-- Main css -->
      <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso Usuario</title>

    
</head>

<body>

        <div class="main">
      
                <!-- Sing in  Form -->
                <section class="sign-in">
                    <div class="container">
                        <div class="signin-content">
                            <div class="signin-image">
                                <figure><img src="imagenes/Logo_ingresar.png" alt="sing up image"></figure>
                               
                            </div>
        
                            <div class="signin-form">
                                <h2 class="form-title">INGRESAR</h2>
                                <form method="POST" class="register-form" id="form1">
                                    <div class="form-group" data-validate = "Valid name is required">
                                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" required name="usuario" id="textfield" placeholder="Escribe tu nombre de usuario"/>
                                    </div>
                                    <div class="form-group" data-validate = "Valid password is required">
                                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" required name="contrasena" id="textfield2" placeholder="Contraseña"/>
                                    </div>
                                      
                                    
                                    <div class="form-group form-button">
                                        <input type="submit" name="guardar" id="signin" class="form-submit" value="Entrar"/>
                                    </div>
                                    <p>  ¿Aun no estas registrado?  </p> 
                                    <a href="registro.php" > Registrate</a> 
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
        
            </div>
 <!--
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="textfield"></label>
    Usuario: 
    <input type="text" name="usuario" id="textfield" />
  </p>
  <p>
    Contraseña: 
    <input type="password" name="contrasena" id="textfield2" />
  </p>
  <p>
    <input type="submit" name="guardar" id="button" value="Entrar" />
  </p>
</form>
             -->
<br />
<br />

<?php
if($_POST['guardar']) {

	$usuario = clean($_POST['usuario']);
	$contrasena = md5($_POST['contrasena']);

	$query = mysqli_query($connect,"SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

	$contar = mysqli_num_rows($query);
  echo $contar;
	
	if ($contar != 0) {
	
		while($row=mysqli_fetch_array($query)) {
		
			if($usuario == $row['usuario'] && $contrasena == $row['contrasena']) 
			
			{
			
				$_SESSION['usuario'] = $usuario;
				
				$_SESSION['id'] = $row['id'];
				
				$_SESSION['rango'] = $row['rango'];
				
				header("Location: index.php");
				
			}
			
		} 
		
	} else { echo "El nombre de usuario y/o contrasena no coinciden"; }
	
}
?>

<script src="jss/jquery1.min.js"></script>
        <script src="jss/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
