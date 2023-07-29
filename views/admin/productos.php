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
                    <h1 class="my-auto">Productos <b>Weslly</b></h1>
                  </div>
                  <div class="col-sm-6 d-flex pe-5 flex-row-reverse">
                    <a href="#addproductoModal" class="w3-button w3-red w3-round w3-medium w3-margin-bottom" style="padding: 20px; margin-top: 12px; background-color:#EB1616" data-toggle="modal"><b>Agregar Producto</b></a>
                    <?php include('modales/producto.php'); ?>
                    <a href="productos.php?list=menor" class="my-auto  px-3 pt-2 text-white"><i class="	tim-icons icon-simple-delete" title="Ordenar menor-mayor precio" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                    <a href="productos.php?list=mayor" class="my-auto  px-3 pt-2 text-white"><i class="tim-icons icon-simple-add" title="Ordenar mayor-menor precio" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                    <a href="#buscarproducto" class="my-auto  px-3 pt-2 text-white" data-toggle="modal"><i class="tim-icons icon-zoom-split" title="Buscar" style="color: #EB1616; font-size: 36px; margin-bottom: 5px;"></i></a>
                  </div>
                </div>

            </div>
            <div class="card-body bg-dark">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        Identificación
                      </th>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Cantidad
                      </th>
                      <th>Precio</th>
                      <th>Descripción</th>
                      <th>
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include("../../controller/productoc.php");
                    foreach ($lista as $registro) { //FOREACH= POR CADA USUARIO QUE EXISTA EN LA BD se imprime un espacio en la tabla donde aparece su información
                    ?>
                      <tr>
                        <td>
                          <?php echo $registro["id"]; ?>
                        </td>
                        <td>
                          <?php echo $registro["nombre"]; ?>
                        </td>
                        <td> X<?php echo $registro["cantidad"]; ?></td>
                        <td><?php echo $registro["precio"]; ?> $COP</td>
                        <td style="white-space: pre-line;"> <?php echo $registro["descripcion"]; ?></td>
                        <td>
                          <a href="#editproductoModal<?php echo $registro["id"]; ?>" class="edit" data-toggle="modal"><i class="tim-icons icon-pencil" data-toggle="tooltip" title="Editar"></i></a>
                          <a href="#deleteproductoModal<?php echo $registro["id"]; ?>" class="delete" data-toggle="modal"><i class="tim-icons icon-trash-simple" data-toggle="tooltip" title="borrar"></i></a>
                          <a href="#eliminarproducto<?php echo $registro["id"]; ?>" class="delete" data-toggle="modal"><i class="tim-icons icon-simple-delete" data-toggle="tooltip" title="Reducir Cantidad"></i></a>
                          <a href="#agregarproducto<?php echo $registro["id"]; ?>" class="delete" data-toggle="modal"><i class="tim-icons icon-simple-add" data-toggle="tooltip" title="Aumentar Cantidad"></i></a>
                        </td>
                      </tr>
                      <?php include('modales/producto.php'); ?>
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