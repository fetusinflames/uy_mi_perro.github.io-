<?php
include '../conectar.php';

$accion=$_GET["accion"];
$id_animal=$_GET["id_animal"];

if($accion=="eliminemascotas")
{
    mysqli_query($conectar,"delete from mascotas where id_animal='".$id_animal."'");
}



 ?><script>

    
 window.location="http://localhost/uymiperro2/admin/elimina_mas.php";
 </script>