<link href="/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/includes/bootstrap/js/bootstrap.min.js"></script>
<script src="/includes/jquery/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<!------ Include the above in your HEAD tag ---------->

<?php
include('includes/head-login.php');
require('db.php');
if (isset($_REQUEST['username'])){
        // Remove backslashes
 $name = stripslashes($_REQUEST['name']);
 // Special Characters scape
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
 $title = stripslashes($_REQUEST['title']);
 $title = mysqli_real_escape_string($con,$title);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $txndate = date("Y-m-d H:i:s");
 $isactive = 1;
 $query = "INSERT into `tblretailerbuyers` (UserName, Password, Email, Name, LastName, Phone, Company, Department, Title, TxnDate, IsActive)
 VALUES ('$username', '".md5($password)."', '$email', '$name', '$lastname', '$phone', '$company', '$department', '$title', '$txndate', '$isactive')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: login.php");
        }
    }else{
  
?>

</html>
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>

    <body>
    <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img src="img/IMG_2281.JPG" alt=""/>
                            <h3>Bienvenido a GRUPO VALFLO</h3>
                            <p>A continuación ingresa tus datos para crear tu cuenta y accesar a nuestro portal</p>         
                        </div>
                        <div class="col-md-9 register-right">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Registro de Compradores</h3>
                                    <!-- <div class="row register-form">-->
                                        <form name="registration" class="row register-form" action="" method="post">  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Nombre(s)" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control" placeholder="Apellido" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control" placeholder="Usuario" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Email" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="10" maxlength="10" name="Phone" class="form-control" placeholder="Teléfono" value="" />
                                            </div>
                            
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                <select name="company" class="form-control">
                                                    <option class="hidden"  selected disabled>Compañía</option>
                                                    <option>CIMACO</option>
                                                    <option>LIVERPOOL</option>
                                                    <option>SEARS</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="department" class="form-control">
                                                    <option class="hidden"  selected disabled>Departamento</option>
                                                    <option>Compras</option>
                                                    <option>Marketing</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Puesto" value="" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Contraseña" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"  placeholder="Confirmar Contraseña" value="" />
                                            </div>
                                            <input name="submit" type="submit" class="btnRegister"  value="Registrar"/>
                                        </div>
                                        </form>
                                <!--  </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </body>
</html>