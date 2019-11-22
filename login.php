<!DOCTYPE html>
<html lang="en">
    <!-- Head -->
<title>Ingresar</title>
<?php
require('db.php');
session_start();
include('includes/head-login.php');

if (isset($_POST['username'])){
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 // Verifica si el usuario existe en la base datos
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redireciona al usuario a home page
     header("Location: index.php");
         }else{
 echo ""; // Agregar tarea para crear un modal que diga que la password o el username es incorrecto
 }
    }else{
?>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" action="" name="login">
                        <span class="login100-form-title p-b-34">
                            INICIO
                        </span>
                        
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Ingresar Usuario">
                            <input class="input100" type="text" name="username" placeholder="Usuario" required >
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Ingresar Contraseña">
                            <input class="input100" type="password" name="password" placeholder="Contraseña" required>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn" id="login_submit" name="submit" type="submit" value="Ingresar"></input>
                        </div>

                        <div class="w-full text-center p-t-27 p-b-239">
                            <span class="txt1">
                                Olvidó su
                            </span>

                            <a href="#" class="txt2">
                                Usuario / Contraseña?
                            </a>
                        </div>
                        <div class="w-full text-center">
                            <a href="registration.php" class="txt3">
                                Registrarse
                            </a>
                        </div>
                    </form>
				<div class="login100-more" style="background-image: url('img/bridal.jpg');"></div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="node_modules\jquery\dist\jquery.min.js"></script>
	<script src="js\animsition.min.js"></script>
	<script src="node_modules\popper.js\dist\popper.js"></script>
	<script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
	<script src="js\select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js\moment.min.js"></script>
	<script src="js\daterangepicker.js"></script>
	<script src="js\countdowntime.js"></script>
	<script src="js/main.js"></script>
<?php } ?>
</body>
</html>