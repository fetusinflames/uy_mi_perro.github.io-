<?php
                include("../conectar.php");

                $id_animal=$_GET["id_animal"];
                
                $nombre=$_POST["nombre"];
                $descripcion=$_POST["descripcion"];
                $raza=$_POST["raza"];
                $color=$_POST["color"];
                $fundacion=$_POST["fundacion"];
                $num_fundacion=$_POST["num_fundacion"];
                

                
                
                $datos=mysqli_query($conectar,"update mascotas set nombre='".$nombre."', descripcion='".$descripcion."', raza='".$raza."', color='".$color."', fundacion='".$fundacion."', num_fundacion='".$num_fundacion."' where id_animal='".$id_animal."'");

                


?>

<script>

    
window.location="http://localhost/uymiperro2/admin/elimina_mas.php";
</script>