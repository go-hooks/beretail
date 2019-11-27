<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
require('db.php');
$result = mysqli_query($con,"SELECT * FROM users");
?>

<div class="btn-toolbar">
    <button class="btn btn-primary">Nuevo Socio</button>
    <button class="btn">Importar</button>
    <button class="btn">Exportar</button>
</div>
<div class="well">
<?php
if (mysqli_num_rows($result) > 0) {
?>
    <table class="table">
      <thead>
        <tr>
          <th>Id de Cliente</th>
          <th>Nombre</th>
          <th>Departamento</th>
          <th>Empresa</th>
          <th>Activo</th>
          <th>Acciones</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
      <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo $row["company"]; ?></td>
            <td>Y</td>
            <td>
                <a href="user.html"><i class="icon-pencil"></i></a>
                <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
            </td>
        </tr>
      </tbody>
      <?php
$i++;
}
?>
    </table>
    <?php
}
else{
    echo "No result found";
}
?>
</div>
<div class="pagination text-center">
    <ul>
        <li><a href="#">Anterior</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Siguiente</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>