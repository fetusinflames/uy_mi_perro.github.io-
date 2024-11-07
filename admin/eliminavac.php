<?php
include '../conectar.php';

$accion=$_GET["accion"];
$codigo=$_GET["codigo"];

if($accion=="eliminevac")
{
    mysqli_query($conectar,"delete from vacunacion where codigo='".$codigo."'");
}

echo "<script>window.location=\"http://localhost/uymiperro2/admin/vacunas.php\";
 </script>";

 ?>