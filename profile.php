<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<!------ Include the above in your HEAD tag ---------->

<?php
  session_start();
  include('includes/head.php');
  require('db.php');
  include("auth.php");
  include('includes/main-menu.php');

  if (isset($_GET['username']))
        {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con,$username);
        $query = "SELECT *
         FROM users WHERE username = '$username'";
     $result = mysqli_query($con,$query) or die(mysql_error());
     $rows = mysqli_num_rows($result);
            if($rows==1){
         //$_SESSION['username'] = $username;
                // Redireciona al usuario a home page
                $profile_data = $result->fetch_assoc();
             }else{
                echo ""; // Agregar tarea para crear un modal que diga que la password o el username es incorrecto
            }
               }else{     
?>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="img/Captura.PNG" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Actualizar Foto
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Laura Ibarra
                                    </h5>
                                    <h6>
                                        Compradora Lujo y Belleza
                                    </h6>
                                    <p class="proile-rating">Empresa: <span>Cimaco</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Acerca de Mi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar Perfil"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>PLANES DE ENTRENAMIENTO</p>
                            <a href="">Ejercicios</a><br/>
                            <a href="">Activaciones</a><br/>
                            <a href="">Sesiones</a>
                            <p>EVALUACIONES</p>
                            <a href="">Movilidad</a><br/>
                            <a href="">Resistencia</a><br/>
                            <a href="">Fuerza Expolosiva</a><br/>
                            <a href="">Evaluacion 1</a><br/>
                            <a href="">Evaluacion 2</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Número de Cliente</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>CIM-001</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre(s)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Laura Alejandra</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellido Paterno</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Ibarra</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellido Materno</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Frias</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Puesto</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Compradora de Lujo y Belleza</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile_data['username'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>laura.ibarra@cimaco.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Teléfono de Oficina</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>8712456789</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Móvil</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>8712456789</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <?php } ?>