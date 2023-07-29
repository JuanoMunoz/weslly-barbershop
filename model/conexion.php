<?php
//Datos de la base de datos
$usuario = "root";

$pass = "";

$servidor = "localhost";

$baseDatos = "barberia";

//conexión

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos) or die ("No se ha podido conectar.");
// es la variable o llave 
    ?>