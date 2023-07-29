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
    if (isset($_GET['list'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
        //de distintos archivos )
        $list = $_GET['list'];
        switch ($list) { //estructura switch que verifica el valor de la variable

            case 'id':
                $lista = id();
                break;

            case 'menor':
                $lista = menor();
                break;

            case 'mayor':
                $lista = mayor();
                break;
            case 'bs':
                $lista = buscar();
                break;
            default:
                echo "sin acciones";
                break;
        }
    }
    function id()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM producto ORDER BY id ASC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function menor()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM producto ORDER BY precio ASC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function mayor()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM producto ORDER BY precio DESC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function buscar()
    {
        include("../../model/conexion.php");
        $busqueda = $_POST['buscar'];
        $sql = $conexion->query("SELECT * FROM producto WHERE nombre  LIKE '%$busqueda%' OR id LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' ");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    if (isset($_GET['pto'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
        //de distintos archivos )
        $pto = $_GET['pto'];
        switch ($pto) { //estructura switch que verifica el valor de la variable

            case 'addP':
                agregarproducto();
                break;

            case 'editarP':
                editarproducto();
                break;

            case 'borrarP':
                borrarproducto();
                break;
            case 'reducirP':
                reducirproducto();
                break;
            case 'agregarP':
                agregarcantida();
                break;

            default:
                echo "sin acciones";
                break;
        }
    }
    //función editar producto
    function editarproducto()
    {
        include("../model/conexion.php");
        $id = $_POST['borrar'];
        $name = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['dc'];
        $icono= $_POST['icono'];
        if (file_exists($_FILES['imgg']['tmp_name']) || is_uploaded_file($_FILES['imgg']['tmp_name'])) {
            $imagen = addslashes(file_get_contents($_FILES['imgg']['tmp_name']));
            $tipoArchivo = $_FILES['imgg']['type'];
            if ($tipoArchivo == 'image/jpeg' or $tipoArchivo == 'image' or $tipoArchivo == 'image/png' or $tipoArchivo == 'image/jpg') {
                if ($_FILES['imgg']['size'] < 2000000) {
                    $conexion->query("update producto set tipo_img='$tipoArchivo',  icono='$icono', img='$imagen', nombre='$name', precio='$precio', descripcion='$descripcion' where id='$id'");
                    if ($conexion) {
                        echo "<script> productoet();</script>";
                    } else {
                        echo "<script> productoef();</script>";
                    }
                } else {
                    echo "<script> productoefalse();</script>";
                }
            } else {
                echo "<script> productoeftipo();</script>";
            }
        } else {
            $conexion->query("update producto set nombre='$name', icono='$icono', precio='$precio', descripcion='$descripcion' where id='$id'");
            if ($conexion) {
                echo "<script> productoet();</script>";
            } else {
                echo "<script> productoef();</script>";
            }
        }
    }
    //Funcion reducir cantidad del producto
    function reducirproducto()
    {
        include("../model/conexion.php");
        $id = $_POST['borrar'];
        $cantidad = $_POST['cantidada'];
        $cantidadr = $_POST['cantidadr'];
        $cantidad1 = $cantidad - $cantidadr;
        if ($cantidad1 <= 0) {
            $conexion->query("delete from producto where id='$id';");
            if ($conexion) {
                echo "<script> productort();</script>";
            } else {
                echo "<script> productoef();</script>";
            }
        } else {
            $conexion->query("update producto set cantidad='$cantidad1' where id='$id'");
            if ($conexion) {
                echo "<script> productoret();</script>";
            } else {
                echo "<script> productoef();</script>";
            }
        }
    }
    function agregarcantida()
    {
        include("../model/conexion.php");
        $id = $_POST['borrar'];
        $cantidad = $_POST['cantidada'];
        $cantidadr = $_POST['cantidadr'];
        $cantidad1 = $cantidad + $cantidadr;
        if ($cantidad1 <= 0) {
            $conexion->query("delete from producto where id='$id';");
            if ($conexion) {
                echo "<script> productort();</script>";
            } else {
                echo "<script> productoef();</script>";
            }
        } else {
            $conexion->query("update producto set cantidad='$cantidad1' where id='$id'");
            if ($conexion) {
                echo "<script> productorest();</script>";
            } else {
                echo "<script> productoef();</script>";
            }
        }
    }
    // agregar producto
    function agregarproducto()
    {
        include("../model/conexion.php");
        $name = $_POST['nombre'];
        $id = $_POST['id'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['dc'];
        $icono= $_POST['icono'];
            if (file_exists($_FILES['imagens']['tmp_name']) || is_uploaded_file($_FILES['imagens']['tmp_name'])) {
                $imagen = addslashes(file_get_contents($_FILES['imagens']['tmp_name']));
                $tipoArchivo = $_FILES['imagens']['type'];
                if ($tipoArchivo == 'image/jpeg' or $tipoArchivo == 'image' or $tipoArchivo == 'image/png' or $tipoArchivo == 'image/jpg') {
                    if ($_FILES['imagens']['size'] < 2000000) {
                        $consulta = $conexion->query("select * from producto where id='$id' ");
                        // si consulta mayor cero, usuario registrado
                        if ($consulta->num_rows > 0) {
                            echo "<script> productoaf();</script>";
                        } else {$conexion->query("insert into producto(id, nombre, cantidad , precio, descripcion, img, tipo_img, icono) values('$id', '$name', '$cantidad', '$precio', '$descripcion','$imagen','$tipoArchivo', '$icono')");
                            echo "<script> productoat();</script>";
                        }
                    }else {
                        echo "<script> productoefalse();</script>";
                    }
                }else {
                    echo "<script> productoeftipo();</script>";
                }
            } else {
                $consulta = $conexion->query("select * from producto where id='$id' ");
                // si consulta mayor cero, usuario registrado
                if ($consulta->num_rows > 0) {
                    echo "<script> productoaf();</script>";
                } else {
                    $conexion->query("insert into producto(id, nombre, cantidad , precio, descripcion, icono) values('$id', '$name', '$cantidad', '$precio', '$descripcion', '$icono')");
                    echo "<script> productoat();</script>";
                }
            }
        }
    // borrar usuario
    function borrarproducto()
    {
        include("../model/conexion.php");
        $borrar = $_POST['borrar'];
        $conexion->query("delete from producto where id='$borrar';");
        if ($conexion) {
            echo "<script> productobt();</script>";
        } else {
            echo "<script> productobf();</script>";
        }
    }
    ?>
</body>

</html>