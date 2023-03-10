<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'root';
    $baseDeDatos = 'nuevodeli';
    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDeDatos);
    $conexion -> set_charset("utf8");
?>
