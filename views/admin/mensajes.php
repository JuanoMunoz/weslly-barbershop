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
                    <h1 class="my-auto">Mensajes <b>Weslly</b></h1>
                  </div>
                  <div class="col-sm-6 d-flex pe-5 flex-row-reverse">
                    <?php if ($_SESSION['rol'] == "admin") { ?>
                      <a href="mensajes.php?list=hoy" class="my-auto  px-3 pt-2 text-white"><i class="fa fa-calendar-times-o  " title="Filtar: Hoy" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                      <a href="mensajes.php?list=ultima" class="my-auto  px-3 pt-2 text-white"><i class="fa fa-calendar-plus-o" title="Filtar: Últimos mensajes" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                      <a href="#buscarmsj" class="my-auto  px-3 pt-2 text-white" data-toggle="modal"><i class="tim-icons icon-zoom-split" title="Buscar" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                      <?php include('modales/mensajes.php'); ?>
                    <?php  } else {
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
                        Correo electrónico
                      </th>
                      <th>Teléfono</th>
                      <th>Mensaje</th>
                      <?php if ($_SESSION['rol'] == "admin") { ?>
                        <th>
                          Acciones
                        </th>
                      <?php  } else {
                      } ?>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include("../../controller/contactoc.php");
                    foreach ($lista as $registro) { //FOREACH= POR CADA USUARIO QUE EXISTA EN LA BD se imprime un espacio en la tabla donde aparece su información
                    ?>
                      <tr>
                        <td>
                          <?php echo $registro["nombre_completo"]; ?>
                        </td>
                        <td>
                          <?php echo $registro["email"]; ?>
                        </td>
                        <td>+57 <?php echo $registro["numero"]; ?></td>
                        <td style="white-space: pre-line;"> <?php echo $registro["mensaje"]; ?></td>
                        <?php if ($_SESSION['rol'] == "admin") { ?>
                          <td>
                            <a href="#wasaCitaModal<?php echo $registro["id"];  ?>" class="whatsapp" data-toggle="modal"><i class="tim-icons icon-chat-33" data-toggle="tooltip" title="Whatsapp"></i></a>
                            <a href="#llamadaCitaModal<?php echo $registro["id"];  ?>" class="whatsapp" data-toggle="modal"><i class="tim-icons icon-mobile" data-toggle="tooltip" title="Llamar"></i></a>
                            <a href="#mailCitaModal<?php echo $registro["id"];  ?>" class="whatsapp" data-toggle="modal"><i class="tim-icons icon-email-85" data-toggle="tooltip" title="Correo"></i></a>
                          </td>
                        <?php  } else {
                        } ?>

                      </tr>
                      <?php include('modales/mensajes.php'); ?>
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