<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda voleibol</title>
    <link rel="stylesheet" href="../StylesCss/style.css">
</head>
<body>
   <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.php')
    ?>
    <p> Las mejores promociones renovadas cada día
    </p>

    <div class="producto">
        <img src="../Pictures/pelotaB.jpg" alt="Tienda de voleibol" width="600">
        <p> Fabricada con materiales de alta calidad, esta pelota ofrece un toque suave, control preciso y gran durabilidad. Ideal tanto para entrenamientos como para competiciones, mantiene la presión de aire por más tiempo y garantiza un vuelo estable en cada saque, pase o remate. La elección perfecta para jugadores que buscan rendimiento profesional.</p>
        <p> El precio de este producto está ahora a 60€ respecto a los 80 originales.</p>
    </div>

       <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php')
    ?>
</body>
</html>