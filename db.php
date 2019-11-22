<?php
// Conexión a la base de datos: Server, Usuario, Password, Base de Datos
$con = mysqli_connect("107.180.34.184","adminberetail","sXnEzDYq^i*$","beretail");
// Verificar Conexión
if (mysqli_connect_errno())
  {
    // Imprimir Mensaje de Error si no hay conexión
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>