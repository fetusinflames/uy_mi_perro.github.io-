<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesion</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
</head>
<body>
<nav class="nav">
        <div class="container">
            <div class="logo-container">
                <img src="img/logo.jpeg" alt="Logo" class="logo">
                <div class="slogan"> <a href="index.php" class="nav-link"></a>¡Uy mi perro esta muy gato!</div>
              
            </div>
            <button class="menu-toggle" id="menuToggle">☰</button>
            <ul class="nav-list" id="navList">
                <li class="nav-item">
                    <a href="adoptanos.php" class="nav-link">
                        Adoptanos
                        <img src="img/adopcion.png" alt="Adopción" class="nav-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="iniciasesion.php" class="nav-link">
                        Inicia Sesión
                        <img src="img/acceso.png" alt="Iniciar Sesión" class="nav-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="registrarse.php" class="nav-link">
                        Registrarse
                        <img src="img/registrarse.png" alt="Registrarse" class="nav-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contactos.php" class="nav-link">
                        Contactos
                        <img src="img/personas.png" alt="Contactos" class="nav-icon">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <br>  <br> 


    <div class="login-container">
        <div class="login-form">
            <h1>Registra tu fundacion</h1>
            
            <img src="img/pata.png" id="pata" alt="Pata superior">
        
            <form action="insertar_fun.php" method="post" id="formulario">

            <input type="email" name="correo_admin" id="inputc" placeholder="   Ingrese el correo con el que se registro como administrador">
            <br>
                <input type="text" name="nombre_fundacion" id="inputc" placeholder="   Ingrese el nombre de la fundacion">
                <br>
                <input type="number" name="telefono" id="inputc" placeholder="  Ingrese el telefono de su fundacion">
                <br>
                <input type="text" name="ubicacion" id="inputc" placeholder="    Ingrese la ubicacion de su fundacion">
                <br>
                <input type="email" name="correo" id="inputc" placeholder="    Ingrese el correo de su fundacion">
                <br>
            
                <input type="submit" value="Registrar" id="boton">

            </form>
            <br>
            <br>
            <img src="img/pata.png" id="pata2" alt="Pata inferior">
        </div>
    </div>
    <br>  <br>  <br>  <br>  <br>  <br>
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navList = document.getElementById('navList');
        
        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
    </script>





