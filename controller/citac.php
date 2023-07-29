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
    date_default_timezone_set("America/Bogota");
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

            case 'all':
                $lista = todas();
                break;

            case 'ultima':
                $lista = az();
                break;

            case 'hoy':
                $lista = za();
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
        $ayer = date("Y-m-d H:i:s", strtotime("yesterday"));
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, usuarios.rol, citas.dia, usuarios.nombre_completo
        FROM citas
        INNER JOIN usuarios ON citas.nombre = usuarios.id
        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
        INNER JOIN servicio ON citas.servicio = servicio.id_s
        WHERE citas.fecha> '$ayer'
        ORDER BY citas.fecha ASC;");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function user()
    {
        $correo = $_SESSION['aide'];
        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.rol, usuarios.id, citas.dia, usuarios.nombre_completo
        FROM citas
        INNER JOIN usuarios ON citas.nombre = usuarios.id
        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
        INNER JOIN servicio ON citas.servicio = servicio.id_s
        WHERE usuarios.id= '$correo'
        ORDER BY citas.fecha DESC;");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function todas()
    {

        include("../../model/conexion.php");
        $sql = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.rol, usuarios.id, citas.dia, usuarios.nombre_completo
        FROM citas
        INNER JOIN usuarios ON citas.nombre = usuarios.id
        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
        INNER JOIN servicio ON citas.servicio = servicio.id_s
        ORDER BY citas.fecha ASC;");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function az()
    {
        include("../../model/conexion.php");
        $ayer = date("Y-m-d H:i:s", strtotime("yesterday"));
        $sql = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.rol, usuarios.id, citas.dia, usuarios.nombre_completo
        FROM citas
        INNER JOIN usuarios ON citas.nombre = usuarios.id
        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
        INNER JOIN servicio ON citas.servicio = servicio.id_s
        WHERE citas.fecha> '$ayer'
        ORDER BY citas.fecha DESC");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function za()
    {
        include("../../model/conexion.php");
        $fecha_ac = date("Y-m-d");
        $sql = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.rol, usuarios.id, citas.dia, usuarios.nombre_completo
        FROM citas
        INNER JOIN usuarios ON citas.nombre = usuarios.id
        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
        INNER JOIN servicio ON citas.servicio = servicio.id_s
        WHERE fecha LIKE '%$fecha_ac%' ");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }
    function buscar()
    {
        include("../../model/conexion.php");
        $busqueda = $_POST['buscar'];
        $sql = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.rol, usuarios.id, citas.dia, usuarios.nombre_completo
        FROM citas
        INNER JOIN usuarios ON citas.nombre = usuarios.id
        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
        INNER JOIN servicio ON citas.servicio = servicio.id_s
        WHERE nombre_completo  LIKE '%$busqueda%' OR telefono LIKE '%$busqueda%' OR fecha LIKE '%$busqueda%' ");
        $lista = $sql->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }

    if (isset($_GET['cita'])) {  //isset verifica si hay datos en el nombre request (variable que puede venir de distintos archivos
        $cita = $_GET['cita']; //declaración variable
        switch ($cita) { //estructura caso para ver el valor de cita
            case 'addC':
                agregarcita();
                break;
            case 'editC':
                editarcita();
                break;
            case 'borrarC':
                borrarCita();
                break;
            default:
                echo "sin acciones";
                break;
        }
    }
    //declaramos funciones 
    function editarcita()
    {
        include("../model/conexion.php");
        $rol= $_POST['rol'];
        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $barbero = $_POST['barbero'];
        $servicio = $_POST['servicio'];
        $id = $_POST['borrar'];
        $fecha_actual = date("Y-m-d H:i:s");
        $mes2 = date("Y-m-d H:i:s", strtotime("+2 month"));
        if ($rol == "admin") {
            if ($fecha > $mes2) {
                echo "<script> citafechapost();</script>";
            } else {
                if ($fecha > $fecha_actual) {
    
                    $consultar = $conexion->query("select * from citas where id_cita!='$id' AND hora_antes<='$fecha' AND hora_despues>='$fecha'");
                    if ($consultar->num_rows > 0) {
    
                        echo "<script> citaaf();</script>";
                    } else {
                        $dia = date('N', strtotime($fecha));
                        switch ($dia) {
                            case '6':
    
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 900 && $hora <= 1615) {
                                    $conexion->query("update citas set nombre='$nombre', barbero='$barbero', servicio='$servicio', fecha='$fecha' where id_cita='$id'");
                                    $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                    $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                    echo "<script> citaet();</script>";
                                } else {
                                    echo "<script> horarioe();</script>";
                                }
                                break;
                            case '7':
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 1100 && $hora <= 1615) {
                                    $conexion->query("update citas set nombre='$nombre', barbero='$barbero', servicio='$servicio', fecha='$fecha' where id_cita='$id'");
                                    $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                    $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                    echo "<script> citaet();</script>";
                                } else {
                                    echo "<script> horarioe();</script>";
                                }
                                break;
    
                            default:
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 900 && $hora <= 2015) {
                                    $conexion->query("update citas set nombre='$nombre', barbero='$barbero', servicio='$servicio', fecha='$fecha' where id_cita='$id'");
                                    $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                    $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                    echo "<script> citaet();</script>";
                                } else {
                                    echo "<script> horarioe();</script>";
                                }
    
                                break;
                        }
                    }
                } else {
                    echo "<script> citaaaf();</script>";
                }
            } 
        }else {
            if ($fecha > $mes2) {
                echo "<script> citafechapostuser();</script>";
            } else {
                if ($fecha > $fecha_actual) {
    
                    $consultar = $conexion->query("select * from citas where id_cita!='$id' AND hora_antes<='$fecha' AND hora_despues>='$fecha'");
                    if ($consultar->num_rows > 0) {
    
                        echo "<script> citaafuser();</script>";
                    } else {
                        $dia = date('N', strtotime($fecha));
                        switch ($dia) {
                            case '6':
    
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 900 && $hora <= 1615) {
                                    $conexion->query("update citas set nombre='$nombre', barbero='$barbero', servicio='$servicio', fecha='$fecha' where id_cita='$id'");
                                    $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                    $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                    echo "<script> citaetu();</script>";
                                } else {
                                    echo "<script> horarioeu();</script>";
                                }
                                break;
                            case '7':
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 1100 && $hora <= 1615) {
                                    $conexion->query("update citas set nombre='$nombre', barbero='$barbero', servicio='$servicio', fecha='$fecha' where id_cita='$id'");
                                    $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                    $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                    echo "<script> citaetu();</script>";
                                } else {
                                    echo "<script> horarioeu();</script>";
                                }
                                break;
    
                            default:
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 900 && $hora <= 2015) {
                                    $conexion->query("update citas set nombre='$nombre', barbero='$barbero', servicio='$servicio', fecha='$fecha' where id_cita='$id'");
                                    $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                    $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                    echo "<script> citaetu();</script>";
                                } else {
                                    echo "<script> horarioeu();</script>";
                                }
    
                                break;
                        }
                    }
                } else {
                    echo "<script> citaaafuser();</script>";
                }
            }
        }
      
    }
    function agregarcita()
    {
        include("../model/conexion.php");
        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $fecha_actual = date("Y-m-d H:i:s");
        $barbero = $_POST['barbero'];
        $servicio = $_POST['servicio'];
        $dia_actual = date("Y-m-d");
        $correo = $_POST['correo'];
        $mes2 = date("Y-m-d H:i:s", strtotime("2 month"));
        $consulta = $conexion->query("select * from citas where fecha='$fecha'");
        if ($rol == "admin") {
            if ($consulta->num_rows > 0) {
                echo "<script> alert('¡Ya existe una cita para esa fecha!, intente con otra.');
                window.location='../views/admin/citas.php' </script>";
            } else {
                //UPDATE citas set hora_despues= DATE_ADD( fecha , INTERVAL  1 HOUR );MODIFICAR DATATIME EN MYSQL PARA PONER SUMARLE A LA FECHA UNA HORA
                if ($fecha > $mes2) {
                    echo "<script> citafechapost();</script>";
                } else {
                    if ($fecha > $fecha_actual) {
                        $consultar = $conexion->query("select * from citas where hora_antes<='$fecha' AND hora_despues>='$fecha'");
                        if ($consultar->num_rows > 0) {

                            echo "<script> citaaf();</script>";
                        } else {
                            $dia = date('N', strtotime($fecha));
                            switch ($dia) {
                                case '6':

                                    $hora = date('Gi', strtotime($fecha));
                                    if ($hora >= 900 && $hora <= 1615) {
                                        $consulta = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
                                        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
                                        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, citas.dia, usuarios.nombre_completo, usuarios.correo
                                        FROM citas
                                        INNER JOIN usuarios ON citas.nombre = usuarios.id
                                        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
                                        INNER JOIN servicio ON citas.servicio = servicio.id_s
                                        WHERE usuarios.correo='$correo' and citas.dia='$dia_actual'");
                                        if ($consulta->num_rows >= 3) {
                                            echo "<script> limitef();</script>";
                                        } else {
                                            $conexion->query("insert into citas(nombre, telefono, fecha, barbero, servicio) values('$nombre', '$telefono', '$fecha', '$barbero', '$servicio')");
                                            $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                            $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                            echo "<script> citaat();</script>";
                                        }
                                    } else {
                                        echo "<script> horario();</script>";
                                    }
                                    break;
                                case '7':
                                    $hora = date('Gi', strtotime($fecha));
                                    if ($hora >= 1100 && $hora <= 1615) {
                                        $consulta = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
                                        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
                                        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, citas.dia, usuarios.nombre_completo, usuarios.correo
                                        FROM citas
                                        INNER JOIN usuarios ON citas.nombre = usuarios.id
                                        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
                                        INNER JOIN servicio ON citas.servicio = servicio.id_s
                                        WHERE usuarios.correo='$correo' and citas.dia='$dia_actual'");
                                        if ($consulta->num_rows >= 3) {
                                            echo "<script> limitef();</script>";
                                        } else {
                                            $conexion->query("insert into citas(nombre, telefono, fecha, barbero, servicio) values('$nombre', '$telefono', '$fecha', '$barbero', '$servicio')");
                                            $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                            $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                            echo "<script> citaat();</script>";
                                        }
                                    } else {
                                        echo "<script> horario();</script>";
                                    }
                                    break;

                                default:
                                    $hora = date('Gi', strtotime($fecha));
                                    if ($hora >= 900 && $hora <= 2015) {
                                        $consulta = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
                                    servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
                                    citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, citas.dia, usuarios.nombre_completo, usuarios.correo
                                    FROM citas
                                    INNER JOIN usuarios ON citas.nombre = usuarios.id
                                    INNER JOIN empleados ON citas.barbero = empleados.id_empleado
                                    INNER JOIN servicio ON citas.servicio = servicio.id_s
                                    WHERE usuarios.correo='$correo' and citas.dia='$dia_actual'");
                                        if ($consulta->num_rows >= 3) {
                                            echo "<script> limitef();</script>";
                                        } else {
                                            $conexion->query("insert into citas(nombre, telefono, fecha, barbero, servicio) values('$nombre', '$telefono', '$fecha', '$barbero', '$servicio')");
                                            $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                            $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                            echo "<script> citaat();</script>";
                                        }
                                    } else {
                                        echo "<script> horario();</script>";
                                    }

                                    break;
                            }
                        }
                    } else {
                        echo "<script> citaaaf();</script>";
                    }
                }
            }
        }else {
            if ($consulta->num_rows > 0) {
                echo "<script> alert('¡Ya existe una cita para esa fecha!, intente con otra.');
                window.location='../views/admin/citas.php' </script>";
            } else {
                //UPDATE citas set hora_despues= DATE_ADD( fecha , INTERVAL  1 HOUR );MODIFICAR DATATIME EN MYSQL PARA PONER SUMARLE A LA FECHA UNA HORA
                if ($fecha > $mes2) {
                    echo "<script> citafechapostu();</script>";
                } else {
                    if ($fecha > $fecha_actual) {
                        $consultar = $conexion->query("select * from citas where hora_antes<='$fecha' AND hora_despues>='$fecha'");
                        if ($consultar->num_rows > 0) {
    
                            echo "<script> citaafu();</script>";
                        } else {
                            $dia = date('N', strtotime($fecha));
                            switch ($dia) {
                                case '6':
    
                                    $hora = date('Gi', strtotime($fecha));
                                    if ($hora >= 900 && $hora <= 1615) {
                                        $consulta = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
                                        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
                                        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, citas.dia, usuarios.nombre_completo, usuarios.correo
                                        FROM citas
                                        INNER JOIN usuarios ON citas.nombre = usuarios.id
                                        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
                                        INNER JOIN servicio ON citas.servicio = servicio.id_s
                                        WHERE usuarios.correo='$correo' and citas.dia='$dia_actual'");
                                        if ($consulta->num_rows >= 3) {
                                            echo "<script> limitefu();</script>";
                                        } else {
                                            $conexion->query("insert into citas(nombre, telefono, fecha, barbero, servicio) values('$nombre', '$telefono', '$fecha', '$barbero', '$servicio')");
                                            $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                            $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                            echo "<script> citaatu();</script>";
                                        }
                                    } else {
                                        echo "<script> horariou();</script>";
                                    }
                                    break;
                                case '7':
                                    $hora = date('Gi', strtotime($fecha));
                                    if ($hora >= 1100 && $hora <= 1615) {
                                        $consulta = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
                                        servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
                                        citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, citas.dia, usuarios.nombre_completo, usuarios.correo
                                        FROM citas
                                        INNER JOIN usuarios ON citas.nombre = usuarios.id
                                        INNER JOIN empleados ON citas.barbero = empleados.id_empleado
                                        INNER JOIN servicio ON citas.servicio = servicio.id_s
                                        WHERE usuarios.correo='$correo' and citas.dia='$dia_actual'");
                                        if ($consulta->num_rows >= 3) {
                                            echo "<script> limitefu();</script>";
                                        } else {
                                            $conexion->query("insert into citas(nombre, telefono, fecha, barbero, servicio) values('$nombre', '$telefono', '$fecha', '$barbero', '$servicio')");
                                            $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                            $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                            echo "<script> citaatu();</script>";
                                        }
                                    } else {
                                        echo "<script> horariou();</script>";
                                    }
                                    break;
    
                                default:
                                $hora = date('Gi', strtotime($fecha));
                                if ($hora >= 900 && $hora <= 2015) {
                                    $consulta = $conexion->query("SELECT citas.id_cita, servicio.id_s, empleados.id_empleado, citas.barbero, citas.servicio, empleados.nombre_empleado, 
                                    servicio.nombre_servicio, citas.hora_antes, citas.fecha, citas.hora_despues, 
                                    citas.fecha_actual, citas.telefono, citas.nombre, usuarios.id, citas.dia, usuarios.nombre_completo, usuarios.correo
                                    FROM citas
                                    INNER JOIN usuarios ON citas.nombre = usuarios.id
                                    INNER JOIN empleados ON citas.barbero = empleados.id_empleado
                                    INNER JOIN servicio ON citas.servicio = servicio.id_s
                                    WHERE usuarios.correo='$correo' and citas.dia='$dia_actual'");
                                    if ($consulta->num_rows >= 3) {
                                        echo "<script> limitefu();</script>";
                                    } else {
                                        $conexion->query("insert into citas(nombre, telefono, fecha, barbero, servicio) values('$nombre', '$telefono', '$fecha', '$barbero', '$servicio')");
                                        $conexion->query("update citas set hora_despues= DATE_ADD( fecha , INTERVAL 1 HOUR )");
                                        $conexion->query("update citas set hora_antes= DATE_SUB( fecha , INTERVAL 1 HOUR )");
                                        echo "<script> citaatu();</script>";
                                    }
                                } else {
                                    echo "<script> horariou();</script>";
                                }
                                
                                break;
                            }
                          
                        }
                    } else {
                        echo "<script> citaaafu();</script>";
                    }
                }
            }
        }
    }
    function borrarCita()
    {
        $rol = $_POST['rol'];
        include("../model/conexion.php");
        $borrar = $_POST['borrar'];
        $conexion->query("delete from citas where id_cita='$borrar'");
        if ($conexion) {
            if ($rol == "admin") {
                echo "<script> citabt();</script>";
            } else {
                echo "<script> citabtu();</script>";
            }
        } else {
            if ($rol == "admin") {
                echo "<script> citabf();</script>";
            } else {
                echo "<script> citabfu();</script>";
            }
        }
    }

    ?>
</body>

</html>