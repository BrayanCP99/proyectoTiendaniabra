<?php

$identificacion = $_POST['identificacion'];
$tipo_doc = $_POST['tipo_doc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono= $_POST['telefono'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];

$estado = 'pendiente';

if ($identificacion =="" or $tipo_doc =="" or $nombres =="" or $apellidos =="" or $email =="" or $telefono =="" or $clave ==""  or $rol =="" ) {
    echo '<script>alert("POR FAVOR COMPLETE LOS CAMPOS PARA REGISTRARSE EN EL SISTEMA")</script>';
     echo "<script>location.href='../views/registro.php'</script>";
} else {
    require ("conexion.php");

    $consultar = "SELECT * FROM user WHERE 
    identificacion = '$identificacion' or email = '$email' ";

    $resultado = $conexion -> query ($consultar);

    if($resultado -> num_rows == 1) {
        echo '<script>alert("LOS DATOS REGISTRADOS YA APARECEN EN EL SISTEMAS, POR FAVOR VERIFIQUE")</script>';
        echo "<script>location.href='../views/registro.php'</script>";

    }else {
        $insertar = "INSERT INTO user VALUES ('$identificacion', '$tipo_doc', '$nombres', '$apellidos', '$email', '$telefono', '$clave', '$rol', '$estado')";
        $conexion -> query($insertar);
        echo '<script>alert("Registro Exitoso")</script>';
        echo "<script>location.href='../views/login.php'</script>"; 
    }
}
?>
    
}