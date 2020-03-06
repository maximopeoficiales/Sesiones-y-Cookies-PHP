    <?php
$nombre = $_POST['nombre'];
/* creacion de cookie */
setcookie('nombre', $nombre, time() + 4800);
/* echo $_COOKIE['nombre']; */
?>
<a href="cookiec.php">Ver la cookie</a>

<!-- Las cookies -->
<!-- 
1.Son archivos de pequeño que se guardan en el ordenador del usuario
2.Estan se almacenana a peticion del navegador
3.Los datos de un cookie se almacenan en base a un nombre al que le asignamos un valor
4.Puede tener informacion como f.expiracion y dominio que se ha creado
 
-->


