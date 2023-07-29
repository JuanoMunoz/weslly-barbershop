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
      <div class="content bg-darker" >
  <div class="row">
        <div class="col-md-12">
          <div class="card rounded-3 ">
            <div class="card-header bg-dark">
              <h1 class="card-title ">
              <div class="row">
								<div class="col-sm-6 my-auto pt-2">
									<h1 class="my-auto">Citas <b>Weslly</b></h1>
								</div>
                <div class="col-sm-6 d-flex pe-5 flex-row-reverse" >
                  <?php if ($_SESSION['rol']=="admin") { ?>
                    <a href="#addCitaModal" class="w3-button w3-red w3-round w3-medium w3-margin-bottom" style="padding: 20px; margin-top: 12px; background-color:#EB1616" data-toggle="modal"><b>Agregar Cita</b></a>
                    <?php  include ('modales/cita.php'); ?>
                    <a href="citas.php?list=hoy" class="my-auto  px-3 pt-2 text-white"><i class="fa fa-calendar-times-o" style="color: #EB1616; font-size: 36px; margin-bottom: 10px;" title="Filtar: Hoy"></i></a>
                    <a href="citas.php?list=ultima"class="my-auto  px-3 pt-2 text-white"><i class="fa fa-calendar-plus-o" title="Filtar: Últimas fechas" style="color: #EB1616; font-size: 36px; margin-bottom: 10px;"></i></a>
                    <a href="citas.php?list=all"class="my-auto  px-3 pt-2 text-white"><i class="tim-icons icon-bullet-list-67" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;" title="Filtar: Todas las citas"></i></a>
                    <a href="#buscarcita" class="my-auto  px-3 pt-2 text-white" data-toggle="modal"><i class="tim-icons icon-zoom-split" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;" title="Buscar"></i></a>
                <?php  }else {
                  
                } ?>
								</div>
							</div>
        
            </div>
            <div class="card-body bg-dark">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Barbero asignado
                      </th>
                      <th>
                        Servicio
                      </th>
                      <th>
                        Teléfono
            
                      </th>
                      <th>
                        Fecha
                      </th>
                      <th>
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        include("../../controller/citac.php");
                        foreach ($lista as $registro) { //FOREACH= POR CADA USUARIO QUE EXISTA EN LA BD se imprime un espacio en la tabla donde aparece su información
                          
                    ?>
                    <tr>
                      <td>
                        <?php echo $registro["nombre_completo"];  ?>
                      </td>
                      <td>
                        <?php echo $registro["nombre_empleado"];  ?>
                      </td>
                      <td>
                        <?php echo $registro["nombre_servicio"];  ?>
                      </td>
                      <td>
                        <?php echo $registro["telefono"];  ?>
                      </td>
                      <td>
                        <?php
                          $mes = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                          $date= $registro["fecha"];
                          echo date('j \d\e \ ',strtotime($date));
                          echo $mes[date('n',strtotime($date))-1];
                          echo date('\ \a \l\a\s h:i a',strtotime($date));
                        ?>
                      </td>
                      <td>
                        <?php if ($_SESSION['rol']=="admin") { ?>
                          <a href="#editcitaModal<?php echo $registro['id_cita']; ?>" class="edit" data-toggle="modal"><i class="tim-icons icon-pencil" data-toggle="tooltip" title="Editar"></i></a>
                          <a href="#deleteCitaModal<?php echo $registro["id_cita"];  ?>" class="delete" data-toggle="modal"><i class="tim-icons icon-trash-simple" data-toggle="tooltip" title="Borrar"></i></a>
                          <a href="#wasaCitaModal<?php echo $registro["id_cita"];  ?>" class="whatsapp" data-toggle="modal"><i class="tim-icons icon-mobile" data-toggle="tooltip" title="Whatsapp"></i></a>
                      <?php  } else { ?>
                          <a href="#editcitaModal<?php echo $registro['id_cita']; ?>" style="margin-left: 15px;" class="edit" data-toggle="modal"><i class="tim-icons icon-pencil" data-toggle="tooltip" title="Editar"></i></a>
                          <a href="#deleteCitaModal<?php echo $registro["id_cita"];  ?>" class="delete" data-toggle="modal"><i class="tim-icons icon-trash-simple" data-toggle="tooltip" title="Borrar"></i></a>

                     <?php } ?>
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
                      <td>
                        
                      </td>
                      <td>
      
                      </td>
                    </tr>
                    <?php  include ('modales/cita.php'); ?>
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