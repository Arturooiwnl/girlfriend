<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Subir Fotos</title>
</head>
<body>
    <div class="buscador">
        <h3>Buscar</h3>
    </div>

    <div class="contenedor">
        <div class="galerias">
            <h2>GALERIA</h2>
        </div>

        <!-- Formulario para subir fotos -->
        <form action="subir_foto.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="foto" accept="image/*" required>
            <button type="submit">Subir Foto</button>
        </form>

        <div class="seccion-fotos">
            <?php
            // Cargar las imágenes de la carpeta 'uploads'
            $images = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($images as $image) {
                echo '<div class="foto">';
                echo '<img src="'.$image.'" alt="Imagen subida" style="width: 100%; height: auto; border-radius: 10px;">';
                echo '<form action="eliminar_foto.php" method="POST" style="display:inline;">';
                echo '<input type="hidden" name="imagen" value="'.$image.'">';
                echo '<button type="submit">Eliminar</button>';
                echo '</form>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
