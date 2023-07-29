<?php
       if (session_status() !== PHP_SESSION_ACTIVE){
        session_start();
     }
?>
<div class="sidebar rounded-3">
  <?php
  include("../../model/conexion.php");
  $correo= $_SESSION['email'];
  $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
  $ejecutar = mysqli_query($conexion, $sql);
  while ($registro = mysqli_fetch_array($ejecutar)) {
    $_SESSION['nombre']= $registro['nombre_completo'];
  }
  $rol=$_SESSION['rol'];
  if ($rol=="admin") { ?>
     <div class="sidebar-wrapper" style="background-color: #EB1616;">
      <div class="logo">
        <a href="../admin/dashboard.php?list=id" class="simple-text logo-normal text-center">
          <h6><b><?php $nombreUsuario= $_SESSION['nombre']; echo "$nombreUsuario"; //la variable session contiene datos de la persona que inica sesión ?></b></h6>
        </a>
      </div>
      <ul class="nav">
        <li class="">
          <a href="../admin/dashboard.php?list=id">
            <i class="tim-icons icon-tag"></i>
            <p style="font-size: 12px;"><b>Usuarios</b></p>
          </a>
        </li>
        <li>
          <a href="../admin/citas.php?list=id">
            <i class="tim-icons icon-single-02"></i>
            <p style="font-size: 12px;">Citas</p>
          </a>
        </li>
        <li>
          <a href="../admin/empleado.php?list=id">
            <i class="tim-icons icon-tie-bow"></i>
            <p style="font-size: 12px;">Empleados</p>
          </a>
        </li>
        <li>
          <a href="../admin/productos.php?list=id">
            <i class="tim-icons icon-basket-simple"></i>
            <p style="font-size: 12px;">Productos</p>
          </a>
        </li>
        <li>
          <a href="../admin/servicios.php?list=id">
            <i class="tim-icons icon-scissors"></i>
            <p style="font-size: 12px;">Servicios</p>
          </a>
        </li>
        <li>
          <a href="../admin/mensajes.php?list=id">
            <i class="tim-icons icon-chat-33"></i>
            <p style="font-size: 12px;">Mensajes</p>
          </a>
        </li>
        <li>
          <a href="../admin/identificacion.php?list=id">
            <i class="tim-icons icon-badge"></i>
            <p style="font-size: 12px;">Identificación</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
<?php  }else { ?>
  <div class="sidebar-wrapper" style="background-color: #e80d34;">
      <div class="logo">
        <a href="../admin/ajustes.php" class="simple-text logo-normal text-center">
         <h6><b><?php $nombreUsuario= $_SESSION['nombre']; echo "$nombreUsuario"; //la variable session contiene datos de la persona que inica sesión ?> </b></h6> 
        </a>
      </div>
      <ul class="nav">
        <li>
          <a href="../admin/citas.php?list=user">
            <i class="tim-icons icon-alert-circle-exc"></i>
            <p style="font-size: 12px;">Consultar citas</p>
          </a>
        </li>
        <li>
          <a href="../admin/mensajes.php?list=user">
            <i class="tim-icons icon-alert-circle-exc"></i>
            <p style="font-size: 12px;">Consultar mensajes</p>
          </a>
        </li>
        <li>
          <a href="../citas.php?ss=active">
            <i class="tim-icons icon-single-02"></i>
            <p style="font-size: 12px;">Citas</p>
          </a>
        </li>
        <li>
          <a href="../admin/productos.php?list=id">
            <i class="tim-icons icon-basket-simple"></i>
            <p style="font-size: 12px;">Productos</p>
          </a>
        </li>
        <li>
          <a href="../servicios.php?ss=active">
            <i class="tim-icons icon-scissors"></i>
            <p style="font-size: 12px;">Servicios</p>
          </a>
        </li>
        <li>
          <a href="../contacto.php?ss=active">
            <i class="tim-icons icon-chat-33"></i>
            <p style="font-size: 12px;">Contacto</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
<?php }
?>

   