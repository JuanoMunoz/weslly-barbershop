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
    //16. verifica si la varible list tiene valor
    if (isset($_GET['list'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
        //de distintos archivos )
        $list = $_GET['list'];
        switch ($list) { //estructura switch que verifica el valor de la variable

            case 'id':
                $lista = id();
                break;

            case 'az':
                $lista=az();
                break;

            case 'za':
                $lista=za();
                break;
            case 'bs':
                $lista= buscar();
                break;
            default:
                echo "sin acciones";
                break;
        }
    }

    if (isset($_GET['request'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
        //de distintos archivos )
        $request = $_GET['request'];
        switch ($request) { //estructura switch que verifica el valor de la variable

            case 'addU':
                agregarUsuarios();
                break;

            case 'logut':
                logout();
                break;

            case 'EditarU':
                editarUsuarios();
                break;
            case 'foto':
                borrarfoto();
                break;
    
            case 'borrarU':
                borrarUsuarios();
                break;
            case 'editadmin':
                editAdmin();
                break;
            case 'imagen':
                imagen();
                break;
            case 'noacceso':
                echo "<script> topbarf();</script>";
                break;
            case 'inactivo':
                echo "<script> inactivo();</script>";
                break;
            default:
                echo "sin acciones";
                break;
        }
    }
    function borrarfoto(){
        include("../model/conexion.php");
        $correo= $_SESSION['email'];
        $sql = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo'");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
            $consulta= $conexion->query("update usuarios set tipo_img=NULL, img=NULL where correo='$correo'");
            if ($consulta) {
                echo "<script> borrarfotot();</script>";
            }else {
                echo "<script> borrarfotof();</script>";
            }
        }
    function imagen(){
        include("../model/conexion.php");
        
        if (file_exists($_FILES['imagens']['tmp_name']) || is_uploaded_file($_FILES['imagens']['tmp_name'])) {
            $id= $_POST['id'];
            $imagen = addslashes(file_get_contents($_FILES['imagens']['tmp_name']));
            $tipoArchivo = $_FILES['imagens']['type'];
            if ($tipoArchivo == 'image/jpeg' or $tipoArchivo == 'image' or $tipoArchivo == 'image/png' or $tipoArchivo == 'image/jpg') {
                if ($_FILES['imagens']['size'] <2000000) {
                    $conexion->query("update usuarios set tipo_img='$tipoArchivo', img='$imagen' where id='$id'");
                    if ($conexion) {
                        echo "<script> editarit();</script>";
                    }else {
                        echo "<script> editarif();</script>";
                    }
                }else {
                    echo "<script> falsedit();</script>";
                }
            }else {
                echo "<script> editartipo();</script>";
            }
            
        }else{
            echo "<script> editarifalse();</script>";  
        }
    }
    function id()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM usuarios ORDER BY id DESC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function az()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM usuarios ORDER BY nombre_completo ASC");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function za()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM usuarios ORDER BY nombre_completo DESC");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function buscar()
    {
        include("../../model/conexion.php");
        $busqueda= $_POST['buscar'];
        $sql = $conexion->query("SELECT * FROM usuarios WHERE nombre_completo  LIKE '%$busqueda%' OR correo LIKE '%$busqueda%' ");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function editAdmin()
    {
        include("../model/conexion.php");
        $name = $_POST['nami'];
        $clave= $_POST['clave'];
        $contrasena= $_POST['password'];
        $password = $_POST['pass'];
        $id = $_POST['id'];
        $clave_encriptada = password_hash($password, PASSWORD_DEFAULT);
        if (!empty($password)) {
            if ($contrasena==$clave) {
                $conexion->query("update usuarios set nmbre_completo='$name', password='$clave_encriptada', clave='$password' where id='$id'");
                if ($conexion) {
                    echo "<script> 
                editar();
                </script>";
                } else {
                    echo "<script> 
                configuracion();
                </script>";
                }
            }else {
                echo "<script> 
                editarinfof();
                </script>"; 
            }
        }else {
            if ($contrasena==$clave) {
                $conexion->query("update usuarios set nombre_completo='$name' where id='$id'");
                if ($conexion) {
                    echo "<script> 
                editar();
                </script>";
                } else {
                    echo "<script> 
                configuracion();
                </script>";
                }
            }else {
                echo "<script> 
                editarinfof();
                </script>"; 
            }

        }

    }
    //función editar usuarios
    function editarUsuarios()
    { 
        include("../model/conexion.php");
        //Actualizar el usuario, la información sale del formulario editar usuario.
        $name = $_POST['neim'];
        $clave= $_POST['clave'];
        $contrasena= $_POST['password'];
        $password = $_POST['pass'];
        $id = $_POST['id'];
        $clave_encriptada = password_hash($password, PASSWORD_DEFAULT);
        if (!empty($password)) {
            if ($contrasena==$clave) {
                $conexion->query("update usuarios set nombre_completo='$name', password='$clave_encriptada', clave='$password' where id='$id'");
                if ($conexion) {
                    echo "<script> 
                editardash();
                </script>";
                } else {
                    echo "<script> 
                editdashf();
                </script>";
                }
            }else {
                echo "<script> 
                editdashpass();
                </script>";
            }
        }else {
            if ($contrasena==$clave) {
                $conexion->query("update usuarios set nombre_completo='$name' where id='$id'");
                if ($conexion) {
                    echo "<script> 
                editardash();
                </script>";
                } else {
                    echo "<script> 
                editdashf();
                </script>";
                }
            }else {
                echo "<script> 
                editdashpass();
                </script>";
            }

        }
    }

    // agregar Usuarios
    function agregarUsuarios()
    {
        include("../model/conexion.php");
        $nombres = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        // consultar si el usuario está registrado
        $consulta = $conexion->query("select * from usuarios where correo='$email' ");
        // si consulta mayor cero, usuario registrado
        if ($consulta->num_rows > 0) { //Si es mayor a 0, es porque existe un usuario.
            echo "<script> 
        agregarf();
        </script>";
        } else {
            // se registra en bd
            $clave_encriptada = password_hash($password, PASSWORD_DEFAULT);
            $conexion->query("insert into usuarios(nombre_completo, correo, password, clave) values('$nombres', '$email', '$clave_encriptada','$password')");
            echo "<script> 
        agregart(); 
        </script>";
        }
    }

    // borrar usuario
    function borrarUsuarios()
    {
        include("../model/conexion.php");
        $email = $_POST['borrar']; //variable borrar= correo usuario.
        $id = $_POST['id'];
        $consulta1= $conexion->query("SELECT * FROM citas where nombre='$id'");
        $consulta2= $conexion->query("SELECT * FROM mensaje where nombre='$id'");
        if ($consulta1->num_rows>0 || $consulta2->num_rows>0) {
            echo "<script> 
            borrarfa();
            </script>";
        }else {
            $conexion->query("delete from usuarios where correo='$email';");
            if ($conexion) {
                echo "<script> 
            borrart();
            </script>";
            } else {
                echo "<script> 
            borrarf();
            </script>";
            }
        }
    }
    function logout()
    {
 
        echo "<script>
           logaut();
    </script>";
    }

    ?>
</body>

</html>