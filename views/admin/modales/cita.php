		<!-- Edit Modal HTML -->

		<div id="editcitaModal<?php echo $registro['id_cita']; ?>" class="modal fade bg-darker bg-darker">
			<div class="modal-dialog">
				<div class="modal-content bg-secondary">
					<form action="../../controller/citac.php?cita=editC" method="POST">
						<div class="modal-header">
							<h4 class="modal-title">Editar cita</h4>
							<input type="hidden" name="borrar" value="<?php echo $registro['rol'];  ?>">
							<input type="hidden" name="borrar" value="<?php echo $registro['id_cita'];  ?>">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
									<label class="text-dark">Tu nombre</label>
									<input type="hidden" value="<?php echo $registro["id"]; ?>" name="nombre" class="form-control">
									<input type="text" value="<?php echo $registro["nombre_completo"]; ?>" name="n/a" class="form-control" readonly="readonly" style="background-color: #ffffff;">
							</div>
							<div class="form-group">
								<label class="text-dark">Fecha</label>
								<input type="datetime-local" value="<?php echo $registro["fecha"]; ?>" name="fecha" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="text-dark">¡Elige uno de nuestros barberos!</label>
								<select name="barbero" class="form-control " required>
									<?php
									include("../../model/conexion.php");
									$empleado= $registro['id_empleado'];
									$sequeel= $conexion->query("SELECT * FROM empleados WHERE id_empleado='$empleado'");
									$lista1= $sequeel->fetch_all(MYSQLI_ASSOC);
									$sql = $conexion->query("SELECT * FROM empleados WHERE id_empleado!='$empleado'");
									$lista = $sql->fetch_all(MYSQLI_ASSOC);
									foreach ($lista1 as $prueba) { ?>
										<option selected style="font-size: 13px;" value="<?php echo $prueba['id_empleado'];?>"> <?php echo $prueba['nombre_empleado']?></option>
									<?php }
									foreach ($lista as $doc) {
									?>
										<option style="font-size: 13px;" value="<?php echo $doc['id_empleado'] ?>"><?php echo $doc['nombre_empleado'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label class="text-dark">¡Elige el servicio!</label>
								<select name="servicio" class="form-control " required>
									<?php
									include("../../model/conexion.php");
									$servicio= $registro['id_s'];
									$sequeel= $conexion->query("SELECT * FROM servicio WHERE id_s='$servicio'");
									$lista1= $sequeel->fetch_all(MYSQLI_ASSOC);
									$sql = $conexion->query("SELECT * FROM servicio WHERE id_s!='$servicio'");
									$lista = $sql->fetch_all(MYSQLI_ASSOC);
									foreach ($lista1 as $prueba) { ?>
										<option selected style="font-size: 13px;" value="<?php echo $prueba['id_s'];?>"> <?php echo $prueba['nombre_servicio']?></option>
									<?php }
									foreach ($lista as $doc) {
									?>
										<option style="font-size: 13px;" value="<?php echo $doc['id_s'] ?>"><?php echo $doc['nombre_servicio'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							<input type="submit" class="btn btn-danger" value="Editar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Delete Modal HTML -->
		<div id="deleteCitaModal<?php echo $registro['id_cita']; ?>" class="modal fade bg-darker">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="../../controller/citac.php?cita=borrarC" method="POST">
						<div class="modal-header">
							<h4 class="modal-title">Borrar cita</h4>
							<input type="hidden" name="borrar" value="<?php echo $registro['id_cita'];  ?>">
							<input type="hidden" name="rol" value="<?php echo $registro['rol'];  ?>">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>¿Está seguro que desea borrar esta cita?</p>
							<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							<input type="submit" class="btn btn-danger" value="Borrar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Añadir cita -->
		<div id="addCitaModal" class="modal fade bg-darker">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="../../controller/citac.php?cita=addC" method="POST">
						<div class="modal-header">
							<h4 class="modal-title">Agregar cita</h4>
							<input type="hidden" name="rol" value="<?php echo $registro['rol'];  ?>">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="text-dark">¿Quién eres?</label>
								<?php
								$correo= $_SESSION["email"];
								$siqual= $conexion->query("SELECT * FROM usuarios WHERE correo='$correo'");
								$doc= $siqual->fetch_all(MYSQLI_ASSOC);
								foreach ($doc as $agregar) {
								?>
								<input type="hidden" value="<?php echo $agregar["id"]; ?>" name="nombre" class="form-control">
								<input type="hidden" value="<?php echo $agregar["correo"]; ?>" name="correo" class="form-control">
								<input type="text" value="<?php echo $agregar["nombre_completo"]; ?>" name="n/a" class="form-control" readonly="readonly" style="background-color: #ffffff;">
								<?php
								}
								?>
							</div>
							<div class="form-group">
								<label class="text-dark">Teléfono</label>
								<input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control" min="1" pattern="[0-9]" required>
							</div>
							<div class="form-group">
								<label class="text-dark">Fecha</label>
								<input type="datetime-local" placeholder="Ingresa la fecha en la que quiere ser atendido" name="fecha" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="text-dark">¡Elige uno de nuestros barberos!</label>
								<select name="barbero" class="form-control " required>
									<?php
									include("../../model/conexion.php");
									$sql = $conexion->query("SELECT * FROM empleados");
									$lista = $sql->fetch_all(MYSQLI_ASSOC);
									foreach ($lista as $doc) {
									?>
										<option style="font-size: 13px;" value="<?php echo $doc['id_empleado'] ?>"><?php echo $doc['nombre_empleado'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label class="text-dark">¡Elige el servicio!</label>
								<select name="servicio" class="form-control " required>
									<?php
									include("../../model/conexion.php");
									$sql = $conexion->query("SELECT * FROM servicio");
									$lista = $sql->fetch_all(MYSQLI_ASSOC);
									foreach ($lista as $doc) {
									?>
										<option style="font-size: 13px;" value="<?php echo $doc['id_s'] ?>"><?php echo $doc['nombre_servicio'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							<input type="submit" class="btn btn-danger" value="Agregar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="wasaCitaModal<?php echo $registro['id_cita']; ?>" class="modal fade bg-darker">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="POST">
						<div class="modal-header">
							<h4 class="modal-title mx-auto">Abrir Whatsapp</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

						</div>
						<div class="modal-body">

							<img src="../../assets/img/whatsapp.png" height="60%" width="60%" alt="whatsapp" style="padding-left: 130px; padding-bottom: 20px; padding-top: 10px;">
							<br>
							<p class="text-center">¿Desea comunicarse con <?php echo $registro['nombre_completo']; ?>?</p>
							<p class="text-warning text-center"><small>Esta acción abrirá una pestaña nueva.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							<a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $registro["telefono"]; ?>" type="button" class="btn btn-danger">Ir</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="buscarcita" class="modal fade bg-darker">
			<div class="modal-dialog">
				<div class="modal-content" style="background-color: #212529; color:whitesmoke;">
					<form action="citas.php?list=bs" method="POST">
						<div class="modal-header">
							<h4 class="text-center"><b>Buscar Cita</b> </h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body" style="text-align: center;">
							<h5 style="margin-bottom: 20px;"><b>Ingresa el nombre, teléfono o fecha asignado a la cita: </b> </h5>
							<input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text" name="buscar">
							<button type="submit" class="btn btn-danger"><b>Buscar</b> </button>
						</div>
					</form>
				</div>
			</div>
		</div>