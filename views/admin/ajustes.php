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
			<?php $correo = $_SESSION['email'];  ?>
			<div class="row gutters">
			<?php
								include("../../model/conexion.php");
								$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
								$ejecutar = mysqli_query($conexion, $sql);
								while ($registro = mysqli_fetch_array($ejecutar)) {
									$clave= $registro['clave'];
								?>
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="card h-100">
						<div class="card-body bg-dark">
							<div class="account-settings">
								<div class="user-profile">
									<div class="user-avatar text-center">
										<?php
											if (!empty($registro["img"])) {?>
												<img src="data:<?php echo $registro['tipo_img']; ?>;base64,<?php echo base64_encode($registro["img"]); ?>" style="width: 200px ;">
										<?php }else{
											echo'<img src="../../assets/img/barber-barberia.gif"style="width: 200px ;">';
										}?>
										
									</div>
								</div>
								<div style="padding-top: 20px;" class="about text-center">
									<h5 class="mb-2 text-primary" style="color: #EB1616;">Opciones</h5>
								<?php if (!empty($registro["img"])) {?>
									<a class="w3-button w3-red w3-round px-4" href="../../controller/usuario.php?request=foto" style="margin-bottom: 10px;">Eliminar foto</a>
									<a class="w3-button w3-red w3-round px-4" href="../../controller/usuario.php?request=logut" style="margin-bottom: 10px;">Cerrar Sesión</a>
									<a class="w3-button w3-red w3-round py-2" href="#editfoto<?php echo $registro['id']; ?>" style="margin-bottom: 10px;" data-toggle="modal">Editar foto de perfil</a>
								<?php }else{ ?>
									<a class="w3-button w3-red w3-round px-4" href="../../controller/usuario.php?request=logut" style=" margin-bottom: 10px;">Cerrar Sesión</a>
									<a class="w3-button w3-red w3-round py-2" href="#addfoto<?php echo $registro['id']; ?>" data-toggle="modal" style="margin-bottom: 10px;">Agregar foto de perfil</a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="card h-100">
						<div class="card-body bg-dark">
							<div class="row gutters">
							
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 50px;">
									<h3 class="mb-3 text-primary text-center"><b style="color: #EB1616;">Detalles Personales</b> </h3>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center">
										<div class="form-group">
											<h3> <b>Nombre</b> </h3>
											<h4> <?php echo $registro['nombre_completo']; ?></h4>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center">
										<div class="form-group">
											<h3> <b>Correo Electrónico</b> </h3>
											<h4> <?php echo $registro['correo']; ?></h4>
										</div>
									</div>
									<div class="col-xl col-lg col-md col-sm col text-center " style="padding-left: 50px; padding-right: 50px; padding-top: 25px; padding-bottom: 5px;">
									</div>
							</div>
								<div class="row gutters">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
										<h3 class="mb-3 text-primary text-center"><b style="color: #EB1616;">Editar información</b> </h3>
									</div>

									<div class="col-xl col-lg col-md col-sm col text-center">
										<div class="form-group ">
										<h6><a href="#editadminModal<?php echo $registro['id']; ?>" data-toggle="modal" type="button">¡Click aquí para editar!</a></h6>
										</div>
									</div>

								</div>
								<?php require_once("modales/modales.php"); ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php require_once('../estatico/footmin.php'); ?>
	</div>
	</div>

	</div>
	<!--   Core JS Files   -->

	<?php require_once('../estatico/js.php'); 
	echo"<script>
		function functionpassword(){
			Swal.fire({
				icon: 'question',
				title: 'Tu contraseña es',
				color: '#0a0a0a',
				iconColor: '#2c14ee',
				text: '$clave',
				confirmButtonText: 'Volver',
				confirmButtonColor: '#ea0000',
			  })
		}
	   </script>?>";
	   ?>


</body>

</html>