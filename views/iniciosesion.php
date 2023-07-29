<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once "../views/estatico/head.php";
  ?>
</head>

<body style="background-color: black;">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>
  <!-- Spinner End -->
  <?php
  if (isset($_GET['ss'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
    //de distintos archivos )
    $list = $_GET['ss']; ?>
        <div class="container-fluid position-relative d-flex p-0">
      <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <a href="index.php?ss=<?php echo $list; ?>" class="">
                  <h3 class="text-primary"><i class="fa fa-cut me-3"></i>Weslly</h3>
                </a>
                <h3>Inicia sesión</h3>
              </div>
              <form action="../controller/inicio.php" method="post">
                <div class="form-floating mb-3">
                  <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: black; border-color: black; border-radius: 0.3rem;" required>
                  <label for="floatingInput">Correo electrónico</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: black; border-color: black; border-radius: 0.3rem;" required>
                  <label for="floatingPassword">Contraseña</label>
                </div>
                <button type="submit" style=" border-radius: 0.3rem;" class="btn btn-primary py-3 w-100 mb-4">Iniciar sesión</button>
                <p class="text-center mb-0">¿No tienes una cuenta?ㅤ<a href="Registro.php?ss=<?php echo $list; ?>">Registrate</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign In End -->
    </div>
  <?php } else { ?>
    <div class="container-fluid position-relative d-flex p-0">
      <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <a href="index.php" class="">
                  <h3 class="text-primary"><i class="fa fa-cut me-3"></i>Weslly</h3>
                </a>
                <h3>Inicia sesión</h3>
              </div>
              <form action="../controller/inicio.php" method="post">
                <div class="form-floating mb-3">
                  <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: black; border-color: black; border-radius: 0.3rem;" required>
                  <label for="floatingInput">Correo electrónico</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: black; border-color: black; border-radius: 0.3rem;" required>
                  <label for="floatingPassword">Contraseña</label>
                </div>
                <button type="submit" style=" border-radius: 0.3rem;" class="btn btn-primary py-3 w-100 mb-4">Iniciar sesión</button>
                <p class="text-center mb-0">¿No tienes una cuenta?ㅤ<a href="Registro.php">Registrate</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign In End -->
    </div>
  <?php }
  ?>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/lib/wow/wow.min.js"></script>
  <script src="../assets/lib/easing/easing.min.js"></script>
  <script src="../assets/lib/waypoints/waypoints.min.js"></script>
  <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../assets/js/main.js"></script>
</body>

</html>