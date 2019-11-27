<link href="/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/includes/bootstrap/js/bootstrap.min.js"></script>
<script src="/includes/jquery/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
require('db.php');
session_start();
include('includes/head-login.php');

if (isset($_POST['username'])){
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 // Verify if user exists in DataBase
        $query = "SELECT * FROM `tblretailerbuyers` WHERE UserName='$username'
and Password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redireciona al usuario a home page
     header("Location: index.php");
         }else{
 echo ""; // Agregar tarea para crear un modal que diga que la password o el username es incorrecto
 }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ingresar</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/loginstyles.css">
</head>

	<body>
		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>GRUPO VALFLO</h3>
					</div>
					<div class="card-body">
						<form method="post" action="" name="login">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" name="username" placeholder="usuario">
								
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" name="password" placeholder="contraseña">
							</div>
							<div class="row align-items-center remember">
								<input type="checkbox">Recordarme
							</div>
							<div class="form-group">
								<input name="submit" type="submit" value="Ingresar" class="btn float-right login_btn">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							<a class="link" href="registration.php">REGISTRO</a>
						</div>
						<div class="d-flex justify-content-center">
							<a class="link" href="#">Recuperar Contraseña</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>