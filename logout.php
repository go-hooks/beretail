<?php
session_start();
// Destruir la sesión
if(session_destroy())
{
// Redireccionando a Login page
header("Location: login.php");
}
?>