<!-- USUARIOS SWEETALERT -->
<head>
    <link rel="icon" type="image/png" href="../assets/img/barber-shop.png"> 
    
</head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    body{
        background-color: #000000; /*#32325d Antiguo color*/

    }

</style> 
<script>
        function mensajef() {
        swal.fire({
            title: "¡Error: Límite de mensajes superado!",
            icon: "error",
            confirmButtonText: 'Ir a inicio',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/index.php?ss=active";
            }
        });
    }
    function mensajefalse() {
        swal.fire({
            title: "¡Error: No se ha agregado el mensaje!",
            text:"Motivo: El nombre seleccionado no concuerda con tú correo.",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/contacto.php?ss=active";
            }
        });
    }
            function mensajet() {
        swal.fire({
            title: "¡Mensaje enviado con éxito!",
            icon: "success",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            color: '#0a0a0a',
            iconColor: '#48793c',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/contacto.php?ss=active";
            }
        });
        }
        function iniciot() {
        swal.fire({
            title: "¡Inicio de sesión correcto!",
            text: "Bienvenida/e/o.",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Ir al Panel',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/index.php?ss=active";
            }
        });
        }
    function iniciof() {
        swal.fire({
            title: "¡Error: Usuario no encontrado! Por favor verifique sus datos",
            icon: "error",
            confirmButtonText: 'Intenta nuevamente',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/iniciosesion.php?ss=disabled";
            }
        });
    }
    function registrot() {
        swal.fire({
            title: " ¡Usuario registrado éxitosamente!'",
            text: "Por favor inicia sesión",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Inicia',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/iniciosesion.php?ss=disabled";
            }
        });
    }
    function registrof() {
        swal.fire({
            title: "¡El usuario ya se encuentra registrado!",
            text:"Intenta con otro email",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Intenta nuevamente',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/Registro.php";
            }
        });
    }
    function topbarf() {
        swal.fire({
            title: "¡Error: Para acceder a este sitio necesita iniciar sesión!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/iniciosesion.php?ss=disabled";
            }
        });
    }
    function inactivo() {
        swal.fire({
            title: "¡Tiempo de inactividad superado!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/iniciosesion.php?ss=disabled";
            }
        });
    }
    function iniciofalse() {
        swal.fire({
            title: "¡Error: No ha ingresado datos! Por favor verifique sus datos",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/iniciosesion.php?ss=disabled";
            }
        });
    }
</script>
<script>
       function editarit() {
        swal.fire({
            title: "¡La foto de perfil se ha actualizado con éxito!",
            icon: "success",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            color: '#0a0a0a',
            iconColor: '#48793c',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function borrarfotot() {
        swal.fire({
            title: "¡La foto de perfil se ha eliminado con éxito!",
            icon: "success",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            color: '#0a0a0a',
            iconColor: '#48793c',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function borrarfotof() {
        swal.fire({
            title: "¡La foto de perfil no se ha eliminado!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function editarinfof() {
        swal.fire({
            title: "¡La contraseña ingresada no coincide con la actual!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function borrarfotofalse() {
        swal.fire({
            title: "No se ha podido eliminar su foto",
            text: "Motivo: No tienes una foto de perfil.",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function editarif() {
        swal.fire({
            title: "¡La foto de perfil no se ha modificado!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function falsedit() {
        swal.fire({
            title: "¡La foto de perfil excede el peso permitido (2mb)!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function serviciofalsedit() {
        swal.fire({
            title: "¡La foto excede el peso permitido (2mb)!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
    function servicioeditartipo() {
        swal.fire({
            title: "¡No ha seleccionado un archivo de imagen!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
    function editartipo() {
        swal.fire({
            title: "¡No ha seleccionado un archivo de imagen!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
    function editarifalse() {
        swal.fire({
            title: "¡No ha seleccionado una foto de perfil!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
</script>
<!-- Borrar cruds -->
<script>
    function borrart() {
        swal.fire({
            title: "¡El usuario se ha eliminado con éxito!",
            icon: "success",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            color: '#0a0a0a',
            iconColor: '#48793c',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }

    function empleadobt() {
        swal.fire({
            title: "¡El empleado se ha eliminado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function identificacionbt() {
        swal.fire({
            title: "¡El documento se ha eliminado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }

    function citabt() {
        swal.fire({
            title: "¡La cita se ha eliminado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citabtu() {
        swal.fire({
            title: "¡La cita se ha eliminado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }

    function productobt() {
        swal.fire({
            title: "¡El producto se ha eliminado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function productort() {
        swal.fire({
            title: "¡Sin inventario! Producto eliminado",
            icon: "info",
            color: '#0a0a0a',
            iconColor: '#2c14ee',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }

    function serviciobt() {
        swal.fire({
            title: "¡El servicio se ha eliminado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
</script>
<script>
    function borrarf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el usuario!",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function borrarfa() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el usuario!",
            icon: "error",
            text: "Motivo: Cita y/o mensaje pendiente/s.",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function citabf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar la cita!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citabfu() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar la cita!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }
    function empleadobf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el empleado!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function identificacionbf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el documento!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }
    function identificacionbaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el documento!",
            text: "Motivo: el documento ya se encuentra en uso.",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }
    function serviciobaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el servicio!",
            text: "Motivo: el servicio ya se encuentra en uso.",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
    function empleadobaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el empleado!",
            text: "Motivo: el empleado cuenta con trabajo asignado.",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function productosbf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el producto!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function serviciobf() {
        swal.fire({
            title: "¡Ha ocurrido un error al eliminar el servicio!",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
</script>
<script>
    function agregart() {
        swal.fire({
            title: "¡El usuario se ha agregado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function citaat() {
        swal.fire({
            title: "¡La cita ha sido agregada con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citaatu() {
        swal.fire({
            title: "¡La cita ha sido agregada con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/citas.php?ss=active";
            }
        });
    }
    function empleadoat() {
        swal.fire({
            title: "¡El empleado se ha agregado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function documentoat() {
        swal.fire({
            title: "¡El documento se ha agregado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }
    function productoat() {
        swal.fire({
            title: "¡El producto se ha agregado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function servicioat() {
        swal.fire({
            title: "¡El servicio se ha agregado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
</script>
<script>
    function agregarf() {
        swal.fire({
            title: "¡Ha ocurrido un error al agregar un nuevo usuario!",
            icon: "error",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function citaaf() {
        swal.fire({
            title: "¡Ha seleccionado una fecha no válida!",
            text: "(Hora ocupada)",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citaafuser() {
        swal.fire({
            title: "¡Ha seleccionado una fecha no válida!",
            text: "(Hora ocupada)",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }
    function citaafu() {
        swal.fire({
            title: "¡Ha seleccionado una fecha no válida!",
            text: "(Hora ocupada)",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/citas.php?ss=active";
            }
        });
    }
    function limitef() {
        swal.fire({
            title: "¡Ha excedido el límite de citas que puede pedir en un día!",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function limitefu() {
        swal.fire({
            title: "¡Ha excedido el límite de citas que puede pedir en un día!",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/citas.php?ss=active";
            }
        });
    }
    function citaaaf() {
        swal.fire({
            title: "¡Ha seleccionado una fecha no válida!",
            text: "Motivo: fecha anterior al día actual.",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citaaafuser() {
        swal.fire({
            title: "¡Ha seleccionado una fecha no válida!",
            text: "Motivo: fecha anterior al día actual.",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }
    function citaaafu() {
        swal.fire({
            title: "¡Ha seleccionado una fecha no válida!",
            text: "Motivo: fecha anterior al día actual.",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/citas.php?ss=active";
            }
        });
    }
    function citafechapost() {
        swal.fire({
            title: "¡La fecha excede el rango de petición!",
            text: "(2 meses)",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citafechapostuser() {
        swal.fire({
            title: "¡La fecha excede el rango de petición!",
            text: "(2 meses)",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }
    function citafechapostu() {
        swal.fire({
            title: "¡La fecha excede el rango de petición!",
            text: "(2 meses)",
            icon: "error",
            confirmButtonText: 'Volver',
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/citas.php?ss=active";
            }
        });
    }
    function empleadoaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al agregar un nuevo empleado!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function documentoaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al agregar un nuevo documento!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }
    function productoaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al agregar un nuevo producto!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function servicioaf() {
        swal.fire({
            title: "¡Ha ocurrido un error al agregar un nuevo servicio!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
</script>
<script>
    function editar() {
        swal.fire({
            title: "¡Tu información se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
</script>
<script>
    function editardash() {
        swal.fire({
            title: "¡El usuario se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function citaet() {
        swal.fire({
            title: "¡La cita se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function citaetu() {
        swal.fire({
            title: "¡La cita se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }
    function empleadoet() {
        swal.fire({
            title: "¡La información del empleado se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function identificacionet() {
        swal.fire({
            title: "¡La información del documento se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }
    function productoet() {
        swal.fire({
            title: "¡El producto se ha modificado con éxito!",
            icon: "success",
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            color: '#0a0a0a',
            iconColor: '#48793c',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function productoret() {
        swal.fire({
            title: "¡Se ha reducido la cantidad del producto!",
            icon: "info",
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            iconColor: '#2c14ee',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function productorest() {
        swal.fire({
            title: "¡Se ha aumentado la cantidad del producto!",
            icon: "info",
            confirmButtonText: 'Volver',
            iconColor: '#2c14ee',
            confirmButtonColor: '#ea0000',
            color: '#0a0a0a',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function servicioet() {
        swal.fire({
            title: "¡El servicio se ha modificado con éxito!",
            icon: "success",
            color: '#0a0a0a',
            iconColor: '#48793c',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',

            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
</script>
<script>
    function editdashf() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function editdashpass() {
        swal.fire({
            title: "¡La contraseña ingresada no coincide con la actual!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/dashboard.php?list=id";
            }
        });
    }
    function empleadoef() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/empleado.php?list=id";
            }
        });
    }
    function identificacionef() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/identificacion.php?list=id";
            }
        });
    }
    function horario() {
        swal.fire({
            title: "¡No se ha agendado la cita!",
            text: "Motivo: fuera del horario",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function horariou() {
        swal.fire({
            title: "¡No se ha agendado la cita!",
            text: "Motivo: fuera del horario",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/citas.php?ss=active";
            }
        });
    }
    function horarioe() {
        swal.fire({
            title: "¡No se ha editado la cita!",
            text: "Motivo: fuera del horario",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function horarioeu() {
        swal.fire({
            title: "¡No se ha editado la cita!",
            text: "Motivo: fuera del horario",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=user";
            }
        });
    }
    function citaef() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/citas.php?list=id";
            }
        });
    }
    function productoef() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function productoefalse() {
        swal.fire({
            title: "¡La foto excede el peso permitido (2mb)!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function productoeftipo() {
        swal.fire({
            title: "¡No ha seleccionado un archivo de imagen!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/productos.php?list=id";
            }
        });
    }
    function servicioef() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/servicios.php?list=id";
            }
        });
    }
</script>
<script>
    function configuracion() {
        swal.fire({
            title: "¡No se han realizado modificaciones!",
            icon: "error",
            iconColor: '#ea0000',
            color: '#0a0a0a',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/admin/ajustes.php";
            }
        });
    }
</script>

<script>
    function logaut() {
        swal.fire({
            title: "¡Cerrando Sesión!",
            icon: "info",
            color: '#0a0a0a',
            iconColor: '#2c14ee',
            confirmButtonText: 'Ir a Inicio',
            confirmButtonColor: '#ea0000',
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../views/index.php?ss=disabled";
            }
        });
    }
</script>

<!-- sweetalert SERVICIOS -->
