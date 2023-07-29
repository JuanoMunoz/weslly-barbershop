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

        case 'user':
            $lista = user();
            break;
    
        case 'ultima':
            $lista=az();
            break;

        case 'hoy':
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
    $sql= $conexion->query("SELECT usuarios.nombre_completo, usuarios.id, mensaje.id_m, mensaje.nombre, mensaje.email, mensaje.numero, mensaje.mensaje, mensaje.fecha
    FROM mensaje
    INNER JOIN usuarios ON mensaje.nombre = usuarios.id
    ORDER BY mensaje.id_m ASC");
    $lista = $sql->fetch_all(MYSQLI_ASSOC);
    return $lista;
}
function user()
{
    $id= $_SESSION['aide'];
    include("../../model/conexion.php");
    $sql= $conexion->query("SELECT usuarios.nombre_completo, usuarios.id, mensaje.id_m, mensaje.nombre, mensaje.email, mensaje.numero, mensaje.mensaje, mensaje.fecha
    FROM mensaje
    INNER JOIN usuarios ON mensaje.nombre = usuarios.id
    WHERE usuarios.id='$id'
    ORDER BY mensaje.id_m ASC");
    $lista = $sql->fetch_all(MYSQLI_ASSOC);
    return $lista;
}
function az()
{
    include("../../model/conexion.php");
    $sql = $conexion->query("SELECT usuarios.nombre_completo, usuarios.id, mensaje.id_m, mensaje.nombre, mensaje.email, mensaje.numero, mensaje.mensaje, mensaje.fecha
    FROM mensaje
    INNER JOIN usuarios ON mensaje.nombre = usuarios.id
    ORDER BY mensaje.id_m DESC ;");
    $lista= $sql->fetch_all(MYSQLI_ASSOC);
    return $lista;
}
function za()
{
    include("../../model/conexion.php");
    $fecha_ac= date("Y-m-d");
    $sql = $conexion->query("SELECT usuarios.nombre_completo, usuarios.id, mensaje.id_m, mensaje.nombre, mensaje.email, mensaje.numero, mensaje.mensaje, mensaje.fecha
    FROM mensaje
    INNER JOIN usuarios ON mensaje.nombre = usuarios.id
     WHERE mensaje.fecha LIKE '%$fecha_ac%' ;");
    $lista= $sql->fetch_all(MYSQLI_ASSOC);
    return $lista;
}
function buscar()
{
    include("../../model/conexion.php");
    $busqueda= $_POST['buscar'];
    $sql = $conexion->query("SELECT usuarios.nombre_completo, usuarios.id, mensaje.id_m, mensaje.nombre, mensaje.email, mensaje.numero, mensaje.mensaje, mensaje.fecha
    FROM mensaje
    INNER JOIN usuarios ON mensaje.nombre = usuarios.id
    WHERE usuarios.nombre_completo  LIKE '%$busqueda%' OR mensaje.numero LIKE '%$busqueda%' OR mensaje.email LIKE '%$busqueda%'; ");
    $lista= $sql->fetch_all(MYSQLI_ASSOC);
    return $lista;
}

if (isset ($_GET['cto'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
    //de distintos archivos )
    $cto= $_GET['cto'];
    switch ($cto) { //estructura switch que verifica el valor de la variable

        case 'add':
            agregarmensaje();
             break;                               
        default:
            echo "sin acciones";
            break;
    }
}
// agregar mensaje
function agregarmensaje(){
    include("../model/conexion.php");
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $numero= $_POST['numero'];
    $descripcion = $_POST['mensaje'];

    $consulta = $conexion->query("select * from mensaje where email='$email' or numero='$numero' ");
    // si consulta mayor cero, usuario registrado
    if ($consulta->num_rows>10) {
        echo "<script> mensajef();</script>";
    }else {
        $mes = date("Y-m-d H:i:s", strtotime("+1 week"));
        $consulta= $conexion->query("SELECT * FROM usuarios WHERE id='$name' AND correo='$email' ");
        if ($consulta->num_rows>0) {
            $conexion->query("insert into mensaje( nombre, email , numero, mensaje) values('$name', '$email', '$numero', '$descripcion')");
            echo "<script> mensajet();</script>";
            $conexion->query("delete from mensaje where fecha>'$mes'");
        }else {
            echo "<script> mensajefalse();</script>";
        }
    }
}
?> 
</body>

</html>