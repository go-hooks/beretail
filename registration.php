<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<body>
<?php
include('includes/head-login.php');
require('db.php');
// Si se realiza el correcto envío de valores, insertarlos en la tabla.
if (isset($_REQUEST['username'])){
        // Remover backslashes
 $name = stripslashes($_REQUEST['name']);
 // Hacer escape a caracteres especiales
 $name = mysqli_real_escape_string($con,$name); 
 $lastname = stripslashes($_REQUEST['lastname']);
 $lastname = mysqli_real_escape_string($con,$lastname); 
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $phone = stripslashes($_REQUEST['phone']);
 $phone = mysqli_real_escape_string($con,$phone);
 $company = stripslashes($_REQUEST['company']);
 $company = mysqli_real_escape_string($con,$company);
 $department = stripslashes($_REQUEST['department']);
 $department = mysqli_real_escape_string($con,$department);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
 $query = "INSERT into `users` (username, password, email, name, lastname, phone, company, department, trn_date)
 VALUES ('$username', '".md5($password)."', '$email', '$name', '$lastname', '$phone', '$company', '$department', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "";
        }
    }else{
  
?>

<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Bienvenido a GRUPO VALFLO</h4>
        <h4 class="card-title mt-3 text-center">Crear Cuenta</h4>
	<p class="text-center">Llena el siguiente formulario</p>

<form name="registration" action="" method="post">
        <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Nombre" type="text" >
    </div> 
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="lastname" class="form-control" placeholder="Apellido" type="text" >
    </div> 
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Usuario" type="text" required>
    </div> <!-- form-group -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Correo" type="email" required>
    </div> <!-- form-group -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" placeholder="Teléfono" type="text" >
    </div> <!-- form-group -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select name="company" class="form-control" type="text" >
			<option selected="">Compañía</option>
			<option>Cimaco</option>
			<option>Liverpool</option>
                        <option>Sacks Mexico</option>
                        <option>Sears</option>
		</select>
        </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select name="department" class="form-control" type="text" >
			<option selected="">Departamento</option>
			<option>Compras</option>
			<option>Marketing</option>
		</select>
        </div> <!-- form-group end -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Contraseña" type="password" required>
    </div> <!-- form-group -->
    <!-- form-group -->                                      
    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">Crear Cuenta</button>
    </div> <!-- form-group// -->      
    <p class="text-center">Ya tienes cuenta? <a href="login.php">Ingresar</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
</article>
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
<body>