<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si el archivo ha sido subido sin errores
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        // Define la carpeta de destino
        $targetDir = 'uploads/';
        $fileName = basename($_FILES['foto']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Mueve el archivo subido a la carpeta de destino
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
            // Redirige a index.html después de subir la foto
            header('Location: index.php');
            exit;
        } else {
            echo 'Error al subir la imagen.';
        }
    } else {
        echo 'No se ha subido ninguna imagen o ha ocurrido un error.';
    }
}
?>
