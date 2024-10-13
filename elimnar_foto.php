<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['imagen'])) {
        $imagePath = $_POST['imagen'];

        // Verifica si el archivo existe y si es un archivo
        if (file_exists($imagePath) && is_file($imagePath)) {
            // Intenta eliminar el archivo
            if (unlink($imagePath)) {
                // Redirige de vuelta a index.php después de eliminar
                header('Location: index.php');
                exit;
            } else {
                echo 'Error al eliminar la imagen.';
            }
        } else {
            echo 'La imagen no existe.';
        }
    } else {
        echo 'No se ha especificado ninguna imagen.';
    }
} else {
    echo 'Método de solicitud no permitido.';
}
?>
