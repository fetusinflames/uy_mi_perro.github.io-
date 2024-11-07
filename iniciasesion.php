


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
    <br>  <br> 
    <?php
        include './conectar.php';    
        if(isset($_POST["login"]))
        {
            $sql= 'SELECT usuarios.id, rol.sesion FROM usuarios
             JOIN rol ON (usuarios.rol_id=rol.id) 
             WHERE email="'.$_POST["email"].'" AND contrasena="'.$_POST["contrasena"].'" ';
            $res = $conectar-> query($sql); //ejecutar la consulta
            if($res->num_rows == 0) {
                echo"El usuario o contraseña, son incorrectos.";
            
            }
            else{
                $datos = $res-> fetch_array (); //consultar los datos
            header('Location: '.$datos[1].' ');
                
            }
            
            
        }
    ?>
    <div class="login-container">
        <div class="login-form">
            <h1>Inicia sesión con<br>tu cuenta</h1>
            
            <img src="img/pata.png" id="pata" alt="Pata superior">
        <?php
        
        ?>
            <form action="" method="post" id="formulario">
                <input type="email" name="email" id="inputc" placeholder="   Email">
                <br>
                <input type="password" name="contrasena" id="inputc" placeholder="    Contraseña">
                <br>
                <input type="submit" value="Inicia" id="boton" name="login">
            </form>
            <img src="img/pata.png" id="pata2" alt="Pata inferior">
        </div>
    </div>
    <br>  <br>  <br>  <br>  <br>  <br>
    <script src="desplegar.js"></script>
</body>
</html>