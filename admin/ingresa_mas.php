<?php

$accion=$_GET["accion"];


if($accion=="ingresamascotas"){

$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$raza=$_POST["raza"];
$color=$_POST["color"];
$fundacion=$_POST["fundacion"];
$num_fundacion=$_POST["num_fundacion"];

// Define la carpeta donde se guardarán las imágenes
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);

// Verifica que el archivo sea una imagen
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
if($check !== false) {
    // Subir la imagen al servidor
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "123456789", "uymiperro");

        // Guardar la ruta de la imagen en la base de datos
        $sql = "INSERT INTO mascotas (nombre, descripcion, raza, color, fundacion, num_fundacion, imagen) VALUES ('$nombre', '$descripcion', '$raza', '$color', '$fundacion','$num_fundacion','$target_file')";}
        
        if ($conexion->query($sql) === TRUE) {
            echo "Mascota agregada con éxito.";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $conexion->close();
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "El archivo no es una imagen.";
}
echo "<script>window.location=\"http://localhost/uymiperro2/admin/\";
 </script>";
?>
