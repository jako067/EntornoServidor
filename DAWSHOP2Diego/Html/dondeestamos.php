<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda voleibol</title>
    <link rel="stylesheet" href="../StylesCss/style.css">
</head>
<body>
    <header > 
      <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.php')
    ?>

    <h2>Contáctanos</h2>
        <form>
            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="email">Email:</label>
            <br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="telefono">Teléfono:</label>
            <br>
            <input type="tel" id="telefono" name="telefono">
            <br><br>
            <label for="comentario">Escribir comentario:</label>
            <br>
            <textarea id="comentario" name="comentario" required></textarea><br><br>

            <button type="reset">Borrar</button>
            <button type="submit">Enviar</button>
        </form>

    <h2>Donde estamos</h2>
    <p> Puedes encontrarnos en calle falsa 1,2,3</p>
    <img src="../Pictures/callefalsa.webp" alt="Tienda de voleibol" width="400">

        <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php')
    ?>
    
</body>
</html>