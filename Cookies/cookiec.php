<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['nombre'])) {
        echo "El valor de la cookie es : ". $_COOKIE['nombre'];
    }else{
        echo "No existe la cookie"; 
    }

    
    ?>
    <a href="cookied.php">Eliminar Cookie</a>
</body>
</html>