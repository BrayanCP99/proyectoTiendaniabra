<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "proyectoamor";

$conexion = new mysqli ($host, $user, $pass, $dbname);

if($conexion -> connect_errno){
    echo '<script>alert("Error de conexion")</script>';
}
