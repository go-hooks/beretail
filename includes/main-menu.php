<!-- Navigation -->
<?php
  require('db.php');
  include("auth.php");
  session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="home.php">GRUPO VALFLO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">INICIO
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.php">ACERCA DE NOSOTROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">DESCARGAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">CONTACTO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Hola, <?php echo $_SESSION['username']; ?> !</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">CERRAR SESIÓN</a>
              </li>
            </ul>
          </div>
        </div>
</nav>