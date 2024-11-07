<?php
                include("../conectar.php");

                $codigo=$_GET["codigo"];
                
             
                 $id=$_POST["id"];
                 $nombre=$_POST["nombre"];
                 $fecha=$_POST["fecha"];

                
                
                $datos=mysqli_query($conectar,"update vacunacion set id='".$id."', nombre='".$nombre."', fecha='".$fecha."' where codigo='".$codigo."'");

                


?>

<script>

    
window.location="http://localhost/uymiperro2/admin/vacunas.php";
</script>