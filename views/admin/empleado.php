<!DOCTYPE html>
<html lang="en">

<head>
 <?php
    require_once("../estatico/headadmin.php");
 ?>
</head>

<body class="">
  <div class="wrapper">
  <?php
    require_once("../estatico/sidebar.php");
    require_once("../estatico/topbar.php");
 ?> 
      <div class="content bg-darker">
  <div class="row">
        <div class="col-md-12">
          <div class="card rounded-3 ">
            <div class="card-header bg-dark">
              <h1 class="card-title ">
              <div class="row">
								<div class="col-sm-6 my-auto pt-2">
									<h1 class="my-auto">Empleados <b>Weslly</b></h1>
								</div>
                <div class="col-sm-6 d-flex pe-5 flex-row-reverse" >
                <a href="#addempleadoModal"class="w3-button w3-red w3-round w3-medium w3-margin-bottom" style="padding: 20px; margin-top: 12px; background-color:#EB1616" data-toggle="modal"><b>Agregar Empleado</b></a>
                  <?php  include ('modales/empleados.php'); ?>
                <a href="empleado.php?list=za" class="my-auto  px-3 pt-2 text-white"><i class="fa fa-sort-alpha-desc  " title="Ordenar Z-A" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                <a href="empleado.php?list=az"class="my-auto  px-3 pt-2 text-white"><i class="fa fa-sort-alpha-asc" title="Ordenar A-Z" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                <a href="#buscarusuario" class="my-auto  px-3 pt-2 text-white" data-toggle="modal"><i class="tim-icons icon-zoom-split" title="Buscar" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
								</div>
							</div>
        
            </div>
            <div class="card-body bg-dark">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                          Documento
                      </th>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Teléfono
                      </th>
                      <th>
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        include("../../controller/empleado.php");
                        foreach ($lista as $registro) { //FOREACH= POR CADA USUARIO QUE EXISTA EN LA BD se imprime un espacio en la tabla donde aparece su información
                          
                    ?>
                    <tr>
                      <td><?php echo $registro['tipo_documento']." ".$registro['documento']; ?></td>
                      <td>
                        <?php echo $registro['nombre_empleado']; ?>
                      </td>
                      <td>
                        <?php echo $registro['telefono_e']; ?>
                      </td>
                      <td>
                        <a href="#editempleadoModal<?php echo $registro['id_empleado']; ?>" class="edit" data-toggle="modal"><i class="tim-icons icon-pencil" data-toggle="tooltip" title="Editar"></i></a>
                        <a href="#deleteempleadoModal<?php echo $registro['id_empleado']; ?>" class="delete" data-toggle="modal"><i class="tim-icons icon-trash-simple" data-toggle="tooltip" title="borrar"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        
                      </td>
                      <td>
                        
                      </td>
                      <td>

                      </td>
                      <td>
      
                      </td>
                    </tr>
                    <?php  include ('modales/empleados.php'); ?>
                  <?php } ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php require_once('../estatico/footmin.php'); ?>
    </div>
  </div>
            <!--   Core JS Files   -->

            <?php require_once('../estatico/js.php'); ?>
</body>

</html>