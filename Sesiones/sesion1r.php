<?php
session_start();
echo "Mi nombre es " . $_SESSION['nombre'];
echo "<br>";
var_dump($_SESSION['nombre']);
