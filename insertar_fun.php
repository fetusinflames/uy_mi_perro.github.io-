

<?php  
include './conectar.php'; 

$nombre_fundacion=$_POST["nombre_fundacion"];
$telefono=$_POST["telefono"];
$ubicacion=$_POST["ubicacion"];
$correo=$_POST["correo"];
$correo_admin=$_POST["correo_admin"];


$insertar=mysqli_query($conectar,"insert into fundacion(nombre_fundacion,telefono,ubicacion,correo,correo_admin)values
('".$nombre_fundacion."','".$telefono."','".$ubicacion."','".$correo."','".$correo_admin."')");

if ($conectar->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conectar->error;
}

echo "<script>window.location=\"http://localhost/uymiperro2/admin/\";
 </script>";


$conn->close();



?>