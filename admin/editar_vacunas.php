<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunacion</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="estilos_barra_admin.css">
</head>
<body>
<?php
include("barra_admin.php");
    ?>
    
    <br>  <br> 


    <style>
        h2 {
    text-align: center;
    color: black;
    font-size: 24px;
    margin: 20px 0;
    padding: 10px;
    font-family: "Chewy", system-ui; /* Mantiene la coherencia con el estilo de la tabla */
}
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



</div>

<h2>Informacion Vacunas</h2>

<div class="table-container">
    <table class="pets-table">
        <tr>
            <th>Codigo</th>
            <th>Id Mascota</th>
            <th>Nombre</th>
            <th>fecha</th>
            
        </tr>
        <?php
        include '../conectar.php';
        $consulta_clientes = mysqli_query($conectar, "SELECT * FROM vacunacion"); 
        while ($resultados = mysqli_fetch_array($consulta_clientes)) {
        ?>
        <tr>
            <td><?php echo $resultados["codigo"];?></td>
            <td><?php echo $resultados["id"];?></td>
            <td><?php echo $resultados["nombre"];?></td>
            <td><?php echo $resultados["fecha"];?></td>
           
          
        </tr>
        <?php
        }
        ?>
    </table>
</div>


   
    <div class="login-container">
        <div class="login-form">
            <h1>EDITA LAS VACUNAS </h1>
            
            <img src="img/pata.png" id="pata" alt="Pata superior">
        <?php
       
        include("../conectar.php");

        $codigo=$_GET["codigo"];

        $datos=mysqli_query($conectar,"select * from  where vacunacion codigo='".$codigo."'");

        $resultados=mysqli_fetch_array($datos);


        $id=$resultados["id"];

    ?>

        
<form action="editando_vacunas.php?codigo=<?php echo $codigo; ?>" method="post" id="formulario">

                <input type="text" name="id" id="inputc" placeholder="   Ingresa el id de la mascota">
                <br>
                <input type="text" name="nombre" id="inputc" placeholder="    Ingresa el nombre de la vacuna">
                <br>
                <input type="date" name="fecha" id="inputc" placeholder="    Ingresa la fecha de vacunacion">
                <br>
                
                <input type="submit" value="Actualiza" id="boton" >
            </form>
            <img src="img/pata.png" id="pata2" alt="Pata inferior">
        </div>
    </div>
    <br>  <br>  <br>  <br>  <br>  <br>
    <script src="../desplegar.js"></script>
</body>
</html>