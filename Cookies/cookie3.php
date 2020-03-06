<?php
date_default_timezone_set('America/Bogota');/* hora segun tu zona horaria */
/* fecha actual y hora actual */
$fecha = date("d/m/Y | H:i:s");
setcookie('fecha',$fecha,time()+31536000);
if (isset($_COOKIE['fecha'])) {
    echo "Hola de nuevo, tu ultima visita fue el" . $_COOKIE['fecha'];

}else{
    echo "Esta es tu primera vez aqui";
}