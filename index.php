<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php
  include('includes/head.php');
  require('db.php');
  include("auth.php");
  include('includes/main-menu.php');
?>

<body>
  <!-- Contenido -->
  <div class="container">
    <div class="row">
    <div class="col-lg-3">
        <h3 class="my-3">Nuestras Marcas</h3>
        <div class="list-group">
          <a href="vanila.php" class="list-group-item">VANILA</a>
          <a href="lucianna.php" class="list-group-item">LUCIANNA</a>
          <a href="thebridalstudio.php" class="list-group-item">THE BRIDAL STUDIO</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/bridal.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/DSC00784.JPG" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/DSC00790.JPG" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previo</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>   

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
	include('includes/footer.php');
?>

  <!-- JavaScript -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
