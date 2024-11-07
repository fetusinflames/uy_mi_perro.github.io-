


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administra</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="estilos_barra_admin.css">
</head>
<body>

<?php
include("barra_admin.php");
    ?>
    
   



    



<style>
    .table-container {
        width: 95%;
        max-width: 1800px;
        margin: 1rem auto;
        padding: 0.5rem;
        overflow-x: auto; /* Permite desplazamiento horizontal en pantallas pequeñas */
    }
    .pets-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: "Chewy", system-ui;
        font-size: 1.2rem;
    }
    .pets-table th, 
    .pets-table td {
        padding: 1.5rem 2rem;
        text-align: left;
        border-bottom: 1px solid #dcc4fc;
    }
    .pets-table th {
        background-color: #500CAC;
        color: white;
        font-weight: normal;
        font-size: 1.3rem;
    }
    .pets-table tr:last-child td {
        border-bottom: none;
    }
    .pets-table tr:nth-child(even) {
        background-color: #f8f0ff;
    }
    .pets-table tr:hover {
        background-color: #eee0ff;
    }
    .pets-table .delete-link {
        color: #500CAC;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }
    .pets-table .delete-link:hover {
        color: #7929E8;
        text-decoration: underline;
    }
    @media screen and (max-width: 1200px) {
        .pets-table {
            font-size: 1.1rem;
        }
        .pets-table th, 
        .pets-table td {
            padding: 1.25rem 1.5rem;
        }
    }
    @media screen and (max-width: 768px) {
        .pets-table {
            font-size: 1rem;
        }
        .pets-table th, 
        .pets-table td {
            padding: 1rem 1.25rem;
        }
    }
    @media screen and (max-width: 600px) {
        .pets-table {
            font-size: 0.9rem;
        }
        .pets-table th, 
        .pets-table td {
            padding: 0.75rem 1rem;
        }
        .pets-table th {
            font-size: 1rem;
        }
    }
    @media screen and (max-width: 480px) {
        .pets-table {
            font-size: 0.8rem;
        }
        .pets-table th, 
        .pets-table td {
            padding: 0.5rem 0.75rem;
        }
        .pets-table th {
            font-size: 0.9rem;
        }
    }
</style>

<div class="table-container">
    <table class="pets-table">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Raza</th>
            <th>Color</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        <?php
        include '../conectar.php';
        $consulta_clientes = mysqli_query($conectar, "SELECT * FROM mascotas"); 
        while ($resultados = mysqli_fetch_array($consulta_clientes)) {
        ?>
        <tr>
            <td><?php echo $resultados["id_animal"];?></td>
            <td><?php echo $resultados["nombre"];?></td>
            <td><?php echo $resultados["descripcion"];?></td>
            <td><?php echo $resultados["raza"];?></td>
            <td><?php echo $resultados["color"];?></td>
            <td>
                <a href="elimina.php?accion=eliminemascotas&id_animal=<?php echo $resultados["id_animal"]; ?>" class="delete-link">Eliminar</a>
            </td>
            <td>
                <a href="editar.php?accion=editar&id_animal=<?php echo $resultados["id_animal"]; ?>" class="delete-link">Editar</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<script src="../desplegar.js"></script>