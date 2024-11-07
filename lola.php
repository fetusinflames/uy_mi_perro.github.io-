<?php
                include("../conectar.php");

                $codigo=$_GET["codigo"];

                $datos=mysqli_query($conectar,"select * from  where vacunacion codigo='".$codigo."'");

                $resultados=mysqli_fetch_array($datos);


                $id=$resultados["id"];

            ?>

