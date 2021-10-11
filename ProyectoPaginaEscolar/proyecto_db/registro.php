
<?php 
session_start();
include "includes/config.php";
include "includes/funciones.php";

ini_set ('error_reporting',0);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="../finaltry/css/bootstrap.css" >
  <link rel ="stylesheet" href="../finaltry/css/style2.css" >
      <!-- Font Icon -->
      <link rel="stylesheet" href="../finaltry/css/material-design-iconic-font.min.css">

      <!-- Main css -->
      <link rel="stylesheet" href="../finaltry/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espera</title>
  
  </head>
  <div class="main">
    <body>  
                <!-- Sing in  Form -->
                <section class="sign-in">
                    <div class="container">
                        <div class="signin-content">
                            <div class="signin-image">
                                <figure><img src="../finaltry/imagenes/Logo_ingresar.png" alt="sing up image"></figure>
                               
                            </div>
        
                            <div class="signin-form">
                                <h2 class="form-title">REGISTRARSE</h2>
                                <form method="POST" class="register-form" id="form1">
                                    <div class="form-group" data-validate = "Valid email is required: ex@abc.xyz">
                                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" required name="usuario" id="email" placeholder="Ingresa un nombre de usuario"/>
                                    </div>
                                    <div class="form-group" data-validate = "Valid password is required: ex@abc.xyz">
                                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" required name="contrasena" id="your_pass" placeholder="Contraseña"/>
                                    </div>

                                    
                                    <div class="form-group form-button">
                                        <input type="submit" name="guardar" id="signin" class="form-submit" value="registarse"/>
                                    </div>
                                   <p>  ¿Ya estas registrado?  </p> 
                                    <a href="login.php" > Ingresa</a> 
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
        
            </div>
        

<?php 

if ($_POST['guardar']){
	
$usuario = clean($_POST['usuario'])	;
$contrasena = md5($_POST['contrasena']);

$c = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM usuario WHERE usuario = '$usuario'"));

if ($c == 1) {echo "El nombre de usuario esta en uso, porfavor escoge otro gracias";}

else {
	
	$r = mysqli_query($connect,"INSERT INTO usuario (usuario,contrasena) values ('$usuario','$contrasena')");
	if ($r){echo "Felicidades, $usuario te has registrado con extito";} ;
	}
}

?>

       <script src="../finaltry/jss/jquery1.min.js"></script>
        <script src="../finaltry/jss/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>