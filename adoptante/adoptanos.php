<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptanos</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos_barra.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: "Chewy", system-ui;
            background-color: #dcc4fc;
        }
        
        .nav {
            background-color: #500CAC;
            color: white;
            padding: 1rem;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .logo-slogan {
            display: flex;
            align-items: center;
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
            margin: 0 1rem;
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
        
        h1 {
            font-family: "Chewy", system-ui;
            text-align: center;
            color: white;
            background-color: #500CAC;
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .mascotas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        
        .mascota-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .mascota-card:hover {
            transform: translateY(-5px);
        }
        
        .mascota-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .mascota-info {
            padding: 15px;
            font-family: "Chewy", system-ui;
        }
        
        .mascota-nombre {
            font-size: 1.2em;
            font-weight: bold;
            margin: 0 0 10px 0;
        }
        
        .mascota-descripcion {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 10px;
        }
        
        .ver-mas {
            display: inline-block;
            background-color: #500CAC;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .ver-mas:hover {
            background-color: #3c097e;
        }
        
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .logo-slogan {
                margin-bottom: 1rem;
            }
            
            .nav-list {
                display: none;
                width: 100%;
                flex-direction: column;
            }
            
            .nav-list.active {
                display: flex;
            }
            
            .nav-item {
                margin: 1rem 0;
            }
            
            .menu-toggle {
                display: block;
                align-self: flex-end;
                margin-top: -2.5rem;
            }
            
            .mascotas-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }
        
        @media screen and (max-width: 480px) {
            .mascotas-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<?php
   
   include("barra_adoptante.php");
   ?>

    <h1>Adoptanos</h1>
    <div class="mascotas-grid">
    <?php
    // Configuración de la conexión a la base de datos
    $uploads_path = "../admin/uploads/";
    $conn = new mysqli("localhost", "root", "123456789", "uymiperro");
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    $sql = "SELECT nombre, descripcion, raza, color, fundacion, num_fundacion, imagen FROM mascotas";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $imagen_url = $uploads_path . basename($row["imagen"]);
            
            echo "<div class='mascota-card'>";
            echo "<img src='" . htmlspecialchars($imagen_url) . "' alt='" . htmlspecialchars($row["nombre"]) . "' class='mascota-img'>";
            echo "<div class='mascota-info'>";
            echo "<h2 class='mascota-nombre'>" . htmlspecialchars($row["nombre"]) . "</h2>";
            echo "<p class='mascota-descripcion'>" . htmlspecialchars($row["descripcion"]) . "</p>";
            echo "<p><strong>Raza:</strong> " . htmlspecialchars($row["raza"]) . "</p>";
            echo "<p><strong>Color:</strong> " . htmlspecialchars($row["color"]) . "</p>";
            echo "<p><strong>Fundación:</strong> " . htmlspecialchars($row["fundacion"]) . "</p>";
            echo "<a href='https://wa.me/".htmlspecialchars($row["num_fundacion"])."'><strong>numero:</strong> " . htmlspecialchars($row["num_fundacion"]) . "</a>";
           
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No hay mascotas disponibles para adopción en este momento.";
    }
    $conn->close();
    ?>
    </div>

   

    <script src="../desplegar.js"></script>
</body>
</html>