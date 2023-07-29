function actualizar(datos){
    d=datos.split('||');
    $("#hot").val(d[correo]);
    $("#neim").val(d[nombre_completo]);
    $("#clave").val(d[password]);
}