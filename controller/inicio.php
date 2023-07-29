<?php
     if (session_status() !== PHP_SESSION_ACTIVE){
        session_start();
     }
?>
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

if (isset($_POST['correo']) && isset($_POST['pass'])){
    //recolectar datos sí se envían en el formulario
    $email = $_POST['correo'];
    $clave = $_POST['pass'];

    //consulta que los datos enviados se encuentren en la BD, viendo que el correo sea igual al correo enviado en el formulario
    $consulta = $conexion->query("select * from usuarios where correo= '$email' ");
        if ($consulta->num_rows > 0) {
            $resultado= $consulta->fetch_assoc(); 
            if ($resultado['correo']==$email && password_verify($clave, $resultado['password'])) {
                 //Podemos declarar las variables del usuario
                $_SESSION['nombre']= $resultado['nombre_completo'];
                $_SESSION['email']= $resultado['correo'];
                $_SESSION['aide']= $resultado['id'];
                $_SESSION['tiempo']= time();
                $_SESSION['rol'] = $resultado['rol'];
                echo "<script>
                iniciot(); 
                </script>";
            }else {
                            echo "<script>
                            iniciof();
            </script>";
            }
        }else {
            echo "<script>
            iniciof();
            </script>";
        }
    
    

    
}
else {
    echo "<script>
    iniciofalse();
    </script>";
}
?>
</body>
</html>