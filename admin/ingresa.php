

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="estilos_barra_admin.css">
</head>
<body>
<?php
include("barra_admin.php");
    ?>
    
   
    <br>  <br> 
   
    <div class="login-container">
        <div class="login-form">
            <h1>INGRESA TU MASCOTA</h1>
            
            <img src="img/pata.png" id="pata" alt="Pata superior">
       



            <form action="ingresa_mas.php?accion=ingresamascotas" method="post" enctype="multipart/form-data" id="formulario">

                <input type="text" name="nombre" id="inputc" placeholder="   Nombre de la mascota">
                <br>
                <input type="text" name="descripcion" id="inputc" placeholder="    Ingresa la descripcion (breve)">
                <br>
                <input type="text" name="raza" id="inputc" placeholder="    Ingresa la raza">
                <br>
                <input type="text" name="color" id="inputc" placeholder="    Ingresa el color">
                <br>
                <input type="text" name="fundacion" id="inputc" placeholder="    Ingresa tu fundacion">
                <br>
                <input type="number" name="num_fundacion" id="inputc" placeholder="    Ingresa el numero de tu fundacion">
                <br>
                <input type="file" name="imagen"> Ingresa una imagen horizontal
                <br>
                <input type="submit" value="Añade" id="boton" >
            </form>
            <img src="img/pata.png" id="pata2" alt="Pata inferior">
        </div>
    </div>
    <br>  <br>  <br>  <br>  <br>  <br>
    <script src="../desplegar.js"></script>
</body>
</html>