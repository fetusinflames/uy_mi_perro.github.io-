<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">

<link rel="stylesheet" href="estilosbarra.css">
</head>
<body>
<?php
   
   include("barra.php");
   ?>
    
    <br>  <br> 
   
    <div class="login-container">
        <div class="login-form">
            <h1>Registrarse</h1>
            
            <img src="img/pata.png" id="pata" alt="Pata superior">
        
            <form action="insertar.php" method="post" id="formulario">
                <input type="tect" name="nombre" id="inputc" placeholder="   Ingrese su nombre completo">
                <br>
                <input type="email" name="email" id="inputc" placeholder="  Ingrese su correo">
                <br>
                <input type="number" name="numero" id="inputc" placeholder="    Ingrese su numero">
                <br>
                <input type="password" name="contrasena" id="inputc" placeholder="    Crea una contraseña">
                <br>
                <input type="text" name="direccion" id="inputc" placeholder="    Ingrese su direccioon">
                <br>
                <input type="number" name="rol_id" id="inputc" placeholder="    Ingrese 1 para fundacion o 2 para usuario">
                <br>
                <input type="number" name="cedula" id="inputc" placeholder="    Ingrese su cedula">
                <br>
                <input type="number" name="nacimiento" id="inputc" placeholder="    Ingrese su año de nacimiento">
                <br>
                <input type="submit" value="Registrarse" id="boton">

            </form>
            <br>
            <br>
            <a href="registrar_fundacion.php">
            <input type="submit" value="Registrar fundacion" id="boton">
            </a>
            <img src="img/pata.png" id="pata2" alt="Pata inferior">
        </div>
    </div>
    <br>  <br>  <br>  <br>  <br>  <br>
    



<script src="desplegar.js"></script>






</body>
</html>