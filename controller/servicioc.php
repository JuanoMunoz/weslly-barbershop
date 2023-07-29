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
        $sql = $conexion->query("SELECT * FROM servicio ORDER BY id_s DESC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function menor()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM servicio ORDER BY precio ASC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function mayor()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM servicio ORDER BY precio DESC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function buscar()
    {
        include("../../model/conexion.php");
        $busqueda = $_POST['buscar'];
        $sql = $conexion->query("SELECT * FROM servicio WHERE nombre_servicio  LIKE '%$busqueda%' OR id_s LIKE '%$busqueda%' OR precio LIKE '%$busqueda%' ");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    if (isset($_GET['ser'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
        //de distintos archivos )
        $ser = $_GET['ser'];
        switch ($ser) { //estructura switch que verifica el valor de la variable

            case 'addS':
                agregarservicio();
                break;

            case 'editarS':
                editarservicio();
                break;

            case 'borrarS':
                borrarservicio();
                break;

            default:
                echo "sin acciones";
                break;
        }
    }
    //función editar servicio
    function editarservicio()
    {
        include("../model/conexion.php");
        $id = $_POST['id'];
        $nombre = $_POST['servicio'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $icono= $_POST['icono'];
        if (file_exists($_FILES['img']['tmp_name']) || is_uploaded_file($_FILES['img']['tmp_name'])) {
            $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
            $tipoArchivo = $_FILES['img']['type'];
            if ($tipoArchivo == 'image/jpeg' or $tipoArchivo == 'image' or $tipoArchivo == 'image/png' or $tipoArchivo == 'image/jpg') {
                if ($_FILES['img']['size'] < 2000000) {
                    $conexion->query("update servicio set nombre_servicio='$nombre', icono='$icono', tipo_foto='$tipoArchivo',descripcion='$descripcion', precio='$precio', imagen='$imagen' where id_s='$id'");
                    if ($conexion) {
                        echo "<script> servicioet();</script>";
                    } else {
                        echo "<script> servicioef();</script>";
                    }
                } else {
                    echo "<script> serviciofalsedit();</script>";
                }
            } else {
                echo "<script> servicioeditartipo();</script>";
            }
        } else {
            $conexion->query("update servicio set nombre_servicio='$nombre', icono='$icono', descripcion='$descripcion', precio='$precio' where id_s='$id'");
            if ($conexion) {
                echo "<script> servicioet();</script>";
            } else {
                echo "<script> servicioef();</script>";
            }
        }
    }

    // agregar servicio
    function agregarservicio()
    {
        include("../model/conexion.php");
        $nombre = $_POST['servicio'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $icono= $_POST['icono'];
        if (file_exists($_FILES['img']['tmp_name']) || is_uploaded_file($_FILES['img']['tmp_name'])) {
            $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
            $tipoArchivo = $_FILES['img']['type'];
            if ($tipoArchivo == 'image/jpeg' or $tipoArchivo == 'image' or $tipoArchivo == 'image/png' or $tipoArchivo == 'image/jpg') {
                if ($_FILES['img']['size'] < 2000000) {
                    // consultar si el usuario está registrado
                    $consulta = $conexion->query("select * from servicio where id_s='$id' ");
                    // si consulta mayor cero, usuario registrado
                    if ($consulta->num_rows > 0) {
                        echo "<script> servicioaf();</script>";
                    } else {
                        // se registra en bd
                        $conexion->query("insert into servicio(nombre_servicio, imagen , precio, descripcion, tipo_foto, icono) values('$nombre', '$imagen', '$precio', '$descripcion','$tipoArchivo', '$icono')");
                        echo "<script> servicioat();</script>";
                    }
                } else {
                    echo "<script> serviciofalsedit();</script>";
                }
            } else {
                echo "<script> servicioeditartipo();</script>";
            }
        } else {
                    $consulta = $conexion->query("select * from servicio where nombre_servicio='$nombre' ");
                    // si consulta mayor cero, usuario registrado
                    if ($consulta->num_rows > 0) {
                        echo "<script> servicioaf();</script>";
                    } else {
                        // se registra en bd
                        $conexion->query("insert into servicio(nombre_servicio, precio, descripcion, icono) values('$nombre', '$precio', '$descripcion', '$icono')");
                        echo "<script> servicioat();</script>";
                    }
        }
    }

    // borrar usuario
    function borrarservicio()
    {
        include("../model/conexion.php");
        $borrar = $_POST['borrar'];
        $consulta = $conexion->query("SELECT * FROM citas where servicio='$borrar'");
        if ($consulta->num_rows > 0) {
            echo "<script> 
        serviciobaf();
        </script>";
        } else {
            $conexion->query("delete from servicio where id_s='$borrar';");
            if ($conexion) {
                echo "<script> serviciobt();</script>";
            } else {
                echo "<script> serviciobf();</script>";
            }
        }
    }
    ?>
</body>

</html>