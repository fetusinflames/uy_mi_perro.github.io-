<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos_barra_admin.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body, html {
            font-family: "Chewy", system-ui;
            background-color: #f0e6ff;
        }
        
        .nav {
            background-color: #500CAC;
            color: white;
            padding: 1rem;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0;
        }
        
        .nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            margin-right: auto;
            margin-left: -1rem;
        }
        
        .logo {
            width: 150px;
            height: auto;
            margin-right: 1rem;
        }
        
        .slogan {
            font-weight: bold;
        }
        
        .nav-list {
            display: flex;
            list-style-type: none;
            align-items: center;
        }
        
        .nav-item {
            margin-left: 2rem;
            text-align: center;
        }
        
        .nav-link {
            color: white;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .nav-icon {
            width: 24px;
            height: 24px;
            margin-top: 0.5rem;
        }
        
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        #banner {
            width: 100%;
            height: auto;
            display: block;
        }
        
        h2 {
            text-align: center;
            color: #4a4a4a;
            font-size: 24px;
            margin: 20px 0;
            padding: 10px;
            background-color: rgba(240, 230, 255, 0.8);
        }
        
        .options-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 0 20px;
        }
        
        .option-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-decoration: none;
            color: inherit;
        }
        
        .option-box h1 {
            margin: 0;
            font-size: 32px;
            color: #4a4a4a;
        }
        
        .option-box img {
            max-width: 80px;
            height: auto;
        }
        
        @media screen and (max-width: 768px) {
            .nav .container {
                flex-wrap: nowrap;
            }
            
            .logo-container {
                flex-grow: 1;
                margin-left: 0;
            }
            
            .nav-list {
                display: none;
                width: 100%;
                flex-direction: column;
                align-items: flex-start;
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #500CAC;
                padding: 1rem;
            }
            
            .nav-list.active {
                display: flex;
            }
            
            .nav-item {
                margin: 1rem 0;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .container {
                padding: 20px;
            }
            
            .options-container {
                grid-template-columns: 1fr;
            }
            
            .option-box {
                flex-direction: column;
                text-align: center;
            }
            
            .option-box h1 {
                margin-bottom: 10px;
            }
            
            .option-box img {
                max-width: 100px;
            }
        }
    </style>
</head>
<body>
    
    <?php
include("barra_admin.php");
    ?>
    
    
  
    <br><br><br>
    <div class="container">
        <img src="img/banner.jpeg" id="banner" alt="Banner">
        
        <h2>¡Hola administrador! ¿Que quieres hacer?</h2>


       
        
        
        <div class="options-container">
            <a href="ingresa.php" class="option-box">
                <h1>INGRESA</h1>
                <img src="img/ingresando.png" alt="Perro">
            </a>
            <a href="elimina.php" class="option-box">
                <h1>EliMINA</h1>
                <img src="img/administra.png" alt="Gato">
            </a>
            <a href="editar_vacunas.php" class="option-box">
                <h1>ACTUALIZA</h1>
                <img src="img/bacceso.png" alt="Registrarse">
            </a>
            <a href="vacunas.php" class="option-box">
                <h1>VACUNAS</h1>
                <img src="img/vacunas.png" alt="Iniciar sesión">
            </a>
        </div>
    </div>
    <br><br><br><br><br>
    <script src="../desplegar.js"></script>
</body>
</html>