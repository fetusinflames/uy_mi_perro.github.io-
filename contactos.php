
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="estilosbarra.css">
</head>
<body>
<?php
   
   include("barra.php");
   ?>
    
    <?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "123456789", "uymiperro");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL para obtener las fundaciones
$query = "SELECT nombre_fundacion, ubicacion FROM fundacion";
$resultado = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundaciones Asociadas</title>
    <style>
        .container {
          font-family: "Chewy", system-ui;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            
        }
        
        .header {
            background-color: #000;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .fundaciones-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        
        .fundacion-card {
            background-color: #f0e6ff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        
        .fundacion-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .fundacion-nombre {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .fundacion-ubicacion {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>FUNDACIONES ASOCIADAS</h1>
        </div>
        <br>
        
        <div class="fundaciones-grid">
            <?php
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo '<div class="fundacion-card">';
                echo '<div class="fundacion-icon">🐾</div>';
                echo '<div class="fundacion-nombre">' . htmlspecialchars($row['nombre_fundacion']) . '</div>';
                echo '<div class="fundacion-ubicacion">' . htmlspecialchars($row['ubicacion']) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php
mysqli_close($conexion);
?>4




    <script src="desplegar.js"></script>