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
        $sql = $conexion->query("SELECT * FROM documento ORDER BY id ASC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function az()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM documento ORDER BY tipo_documento ASC");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function za()
    {
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT * FROM documento ORDER BY tipo_documento DESC");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function buscar()
    {
        include("../../model/conexion.php");
        $busqueda= $_POST['buscar'];
        $sql = $conexion->query("SELECT * FROM documento WHERE tipo_documento  LIKE '%$busqueda%'");
        $lista= $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }

if (isset ($_GET['doc'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
    //de distintos archivos )
    $doc= $_GET['doc'];
    switch ($doc) { //estructura switch que verifica el valor de la variable

        case 'add':
            agregardocumento();
             break;

        case 'editarE':
            editardocumento();
            break;
        
        case 'borrarE':
            borrardocumento();
            break;
                       
        default:
            echo "sin acciones";
            break;
    }
}
//función editar documento
function editardocumento(){
    include("../model/conexion.php");
    $documento = $_POST['documento'];
    $acr = $_POST['acr'];
    $id = $_POST['id'];
    $conexion->query("update documento set tipo_documento='$documento', documento='$acr' where id='$id'");
    if ($conexion) {
        echo "<script> identificacionet();</script>";
    }else {
        echo "<script> identificacionef();</script>";
    }
}

// agregar documento
function agregardocumento(){
    include("../model/conexion.php");
    $documento = $_POST['documento'];
    $acr = $_POST['acr'];
    // consultar si el usuario está registrado
    $consulta = $conexion->query("select * from documento where tipo_documento='$documento' ");
    // si consulta mayor cero, usuario registrado
    if ($consulta->num_rows>0) {
        echo "<script> documentoaf();</script>";
    }else {
        // se registra en bd
        $conexion->query("insert into documento (tipo_documento, documento) values('$documento', '$acr')");
        echo "<script> documentoat();</script>";
    }
}

// borrar usuario
function borrardocumento(){
    include ("../model/conexion.php");
    $id=$_POST['borrar'];
    $consulta= $conexion->query("SELECT * FROM empleados where tipo_documento='$id'");
    if ($consulta->num_rows>0) {
        echo "<script> 
        identificacionbaf();
        </script>";
    }else {
        $conexion->query("delete from documento where id='$id'");
        if ($conexion) {
            echo "<script> identificacionbt();</script>";
        } else {
            echo "<script> identificacionbf();</script>";
        }
    }
}
?> 
</body>

</html>