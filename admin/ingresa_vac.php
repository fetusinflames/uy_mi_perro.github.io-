<?php
include '../conectar.php';

$accion=$_GET["accion"];


if($accion=="ingresavacunas"){


$id=$_POST["id"];
$nombre=$_POST["nombre"];
$fecha=$_POST["fecha"];


$insertar=mysqli_query($conectar, "INSERT INTO vacunacion(id,nombre,fecha) VALUES ('".$id."','".$nombre."','".$fecha."')");




if ($conectar->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conectar->error;
}
echo "<script>window.location=\"http://localhost/uymiperro2/admin/\";
 </script>";
$conn->close();

}