<?php
/* si hay dato por post */
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 8000000);
} else {
    /* no existe el color */
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
        /* sino existe la cookie */
    } else {
        $color = 'white';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body <?php echo "style='background-color:$color'";    ?>>
    <form action="cookiecolor.php" method="POST">
        <label for="color">Escoge tu color de fondo</label>
        <select name="color" >
            <option value="red">rojo</option>
            <option value="blue">azul</option>
            <option value="green">verde</option>
            <option value="yellow">amarillo</option>
            <option value="black">black</option>
        </select>
        <input type="submit" value="Cambia el color :D">
    </form>

</body>

</html>