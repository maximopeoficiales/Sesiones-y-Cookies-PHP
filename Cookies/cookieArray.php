<?php
/* ejemplo de creacion de un cookie como array */
$persona = array("Pedro", "Perez", "26", "Madrid", "abcde");
setcookie("cookie[nombre]", $persona[0], time() + 3600);
setcookie("cookie[apellido]", $persona[1], time() + 3600);
setcookie("cookie[edad]", $persona[2], time() + 3600);
setcookie("cookie[ciudad]", $persona[3], time() + 3600);
setcookie("cookie[pass]", $persona[4], time() + 3600);

echo "<br>El nombre es: " . $_COOKIE['cookie']['nombre'];
echo "<br>El apellido es: " . $_COOKIE['cookie']['apellido'];
echo "<br>El edad es: " . $_COOKIE['cookie']['edad'];
echo "<br>El ciudad es: " . $_COOKIE['cookie']['ciudad'];
echo "<br>El pass es: " . $_COOKIE['cookie']['pass'];
