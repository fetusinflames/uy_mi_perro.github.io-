<?php
  include './conectar.php';    
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$numero=$_POST["numero"];
$contrasena=$_POST["contrasena"];
$direccion=$_POST["direccion"];
$rol_id=$_POST["rol_id"];
$cedula=$_POST["cedula"];
$nacimiento=$_POST["nacimiento"];

$insertar=mysqli_query($conectar,"insert into usuarios(nombre,email,numero,contrasena,direccion,rol_id,cedula,nacimiento)values
('".$nombre."','".$email."','".$numero."','".$contrasena."','".$direccion."','".$rol_id."','".$cedula."','".$nacimiento."')");

if ($conectar->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conectar->error;
}
echo "<script>window.location=\"http://localhost/uymiperro2/\";
 </script>";

$conn->close();



?>
