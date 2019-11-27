<?php
require('db.php');
$result = mysqli_query($con,"SELECT * FROM tblretailerbuyers");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> YTest</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Puesto</td>
    <td>Email</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["Title"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
</tr>
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
 </body>
</html>