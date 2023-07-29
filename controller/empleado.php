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
    function id()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT documento.tipo_documento, empleados.id_empleado, empleados.clave, empleados.nombre_empleado, empleados.telefono_e, documento.id, empleados.documento
        FROM empleados
        INNER JOIN documento ON empleados.tipo_documento = documento.id ORDER BY empleados.id_empleado DESC;");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function az()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT documento.tipo_documento, empleados.id_empleado, empleados.nombre_empleado, empleados.telefono_e, documento.id, empleados.documento
        FROM empleados
        INNER JOIN documento ON empleados.tipo_documento = documento.id ORDER BY empleados.nombre_empleado ASC;");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function za()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT documento.tipo_documento, empleados.id_empleado, empleados.nombre_empleado, empleados.telefono_e, documento.id, empleados.documento
        FROM empleados
        INNER JOIN documento ON empleados.tipo_documento = documento.id ORDER BY empleados.nombre_empleado DESC;");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function buscar()
    {
        include("../../model/conexion.php");
        $busqueda= $_POST['buscar'];
        $sql = $conexion->query("SELECT documento.tipo_documento, empleados.id_empleado, empleados.nombre_empleado, empleados.telefono_e, documento.id, empleados.documento
        FROM empleados
        INNER JOIN documento ON empleados.tipo_documento = documento.id
         WHERE nombre_empleado  LIKE '%$busqueda%' OR telefono_e LIKE '%$busqueda%' ");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }

if (isset ($_GET['emp'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
    //de distintos archivos )
    $emp= $_GET['emp'];
    switch ($emp) { //estructura switch que verifica el valor de la variable

        case 'addE':
            agregarempleados();
             break;

        case 'editarE':
            editarempleados();
            break;
        
        case 'borrarE':
            borrarempleados();
            break;
                       
        default:
            echo "sin acciones";
            break;
    }
}
//función editar empleados
function editarempleados(){
    include("../model/conexion.php");
    $tipodoc= $_POST['doc'];
    $name = $_POST['nempleado'];
    $password= $_POST['cempleado'];
    $id = $_POST['id'];
    $clave_encriptada= password_hash($password, PASSWORD_DEFAULT);
    $conexion->query("update empleados set nombre_empleado='$name', tipo_documento='$tipodoc', clave='$password', clave_e='$clave_encriptada' where id_empleado='$id'");
    if ($conexion) {
        echo "<script> empleadoet();</script>";
    }else {
        echo "<script> empleadoef();</script>";
    }
}

// agregar empleados
function agregarempleados(){
    include("../model/conexion.php");
    $tipodoc= $_POST['doc'];
    $nombres = $_POST['nempleado'];
    $tel = $_POST['templeado'];
    $password= $_POST['cempleado'];
    $documento= $_POST['documento'];
    
    // consultar si el usuario está registrado
    $consulta = $conexion->query("select * from empleados where telefono_e='$tel' ");
    // si consulta mayor cero, usuario registrado
    if ($consulta->num_rows>0) {
        echo "<script> empleadoaf();</script>";
    }else {
        // se registra en bd
        $clave_encriptada= password_hash($password, PASSWORD_DEFAULT);
        $conexion->query("insert into empleados(tipo_documento,nombre_empleado, documento, telefono_e, clave_e, clave) values('$tipodoc','$nombres', '$documento', '$tel', '$clave_encriptada', '$password')");
        echo "<script> empleadoat();</script>";
    }
}

// borrar usuario
function borrarempleados(){
    include ("../model/conexion.php");
    $id=$_POST['borrar'];
    $consulta= $conexion->query("SELECT * FROM citas where barbero='$id'");
    if ($consulta->num_rows>0) {
        echo "<script> 
        empleadobaf();
        </script>";
    }else {
        $conexion->query("delete from empleados where id_empleado='$id';");
        if ($conexion) {
            echo "<script> empleadobt();</script>";
        } else {
            echo "<script> empleadoebf();</script>";
        }
    }
}
?> 
</body>

</html>