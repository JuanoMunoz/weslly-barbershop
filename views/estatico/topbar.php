<?php
       if (session_status() !== PHP_SESSION_ACTIVE){
        session_start();
     }
if (!isset($_SESSION['email'])) {
  header('Location: ../../controller/usuario.php?request=noacceso');
} else {
  if ((time() - $_SESSION['tiempo']) > 1800 ) {
    session_destroy(); 
    header('Location: ../../controller/usuario.php?request=inactivo');
  }else {
    $_SESSION['tiempo'] = time();  
  }
}

?>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle d-inline">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="../index.php?ss=active" ><i class="fa fa-home" style="margin-left: 30px; margin-right:5px;"></i>Ir a inicio</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="photo">
                <?php
                $correo = $_SESSION['email'];
                include("../../model/conexion.php");
                $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
                $ejecutar = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_array($ejecutar)) {

                ?>
                  <?php
                  if (!empty($registro["img"])) { ?>
                    <img src="data:<?php echo $registro['tipo_img']; ?>;base64,<?php echo base64_encode($registro["img"]); ?>">
                  <?php } else {
                    echo '<img src="../../assets/img/barber-barberia.gif">';
                  } ?>
                <?php } ?>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-navbar">
              <li class="nav-link"><a href="../admin/ajustes.php" class="nav-item dropdown-item text-darker">Perfil</a></li>
              <li class="dropdown-divider"></li>
              <li class="nav-link"><a href="../index.php?ss=active" class="nav-item dropdown-item text-darker">Inicio</a></li>
              <li class="nav-link "><a href="javascript:void(0)" class="nav-item dropdown-item text-darker" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a></li>
            </ul>
          </li>
          <li class="separator d-lg-none"></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Navbar -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content  ">
        <div class="modal-header ">
          <h5 class="modal-title " id="exampleModalLabel">¿Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Salir" si esta listo para finalizar la sesión actual.</div>
        <div class="modal-footer">
          <button class="btn" type="button" data-dismiss="modal">Volver</button>

          <a class="btn btn-danger" href="../../controller/usuario.php?request=logut">Salir</a>
        </div>
      </div>
    </div>
  </div>