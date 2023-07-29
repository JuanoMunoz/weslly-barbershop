<!DOCTYPE html>  
<html lang="en">
    <!-- Desde formularios se envian datos para poder ejecutar funciones -->
<!-- Se abre para implementar sweetalert -->
<head>
    <?php
    //Llamar a sweetalert
        require_once("sweetalert.php");
    ?>
</head>
<body>
<?php
include ("../model/conexion.php");
if (isset($_POST['correo'])){
//recolectamos los datos
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $clave = $_POST['pass'];

    //consulta base de datos si email== registrado
    $consulta= $conexion->query("select * from usuarios where correo= '$email'");

    if ($consulta->num_rows>0){ //sí es mayor significa que ya hay un usuario con ese correo
        echo "<script>
                registrof();
            </script>";
    }else { //Sí no, se registra en la base de datos
        $clave_encriptada= password_hash($clave, PASSWORD_DEFAULT);
        if ($clave== "adminweslly" && $email=="adminweslly@gmail.com") {
            $conexion->query("insert into usuarios(nombre_completo, correo, password, clave, rol) values('$nombre', '$email', '$clave_encriptada', '$clave', 'admin')");
            echo "<script>
                    registrot();
                </script>";      
        }else {
            $conexion->query("insert into usuarios(nombre_completo, correo, password, clave, rol) values('$nombre', '$email', '$clave_encriptada', '$clave', 'user')");
            echo "<script>
                    registrot();
                </script>";   
        }       
    }
}
?>
</body>
</html>