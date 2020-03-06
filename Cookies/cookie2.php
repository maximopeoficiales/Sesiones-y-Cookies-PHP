<?php
if (isset($_COOKIE['visita'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie('contador', $contador, time() + 315360000);
    echo "Que bueno verte o travez por aqui " .  $contador;
} else {
    setcookie('visita', 'ok', time() + 315360000);
    setcookie('contador', 1, time() + 315360000);
    echo "Bienvenido a la pagina por primera vez";
}

/* cookie que almacena el numero de visita del usuario */