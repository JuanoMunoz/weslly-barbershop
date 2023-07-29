			<div id="editusuarioModal<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker"> 
			<!-- Crea un id para identifar una ventana modal, para al dar clic al botón abra esa y solo esa. -->
				<div class="modal-dialog">
					<div class="modal-content bg-secondary">
						<form action="../../controller/usuario.php?request=EditarU" method="POST ">
							<div class="modal-header">
								<h4 class="modal-title">Editar Usuario</h4>
								<input type="hidden" class="form-control" name="id" value="<?php echo $registro['id'];  ?>" required>
								<input type="hidden" class="form-control" name="clave" value="<?php echo $registro['clave'];  ?>" required>
								<!-- Input permite al usuario ingresar -->
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="text-dark">Nombre</label>
									<input type="text" class="form-control" name="neim" value="<?php echo $registro['nombre_completo'];  ?>" required>
								</div>
								<div class="form-group">
									<label class="text-dark">Contraseña actual</label>
									<input type="password" class="form-control" name="password" placeholder="Ingresa tu cotraseña actual..." required>
								</div>
								<div class="form-group">
									<label class="text-dark"> Nueva contraseña</label>
									<input type="password" class="form-control" name="pass" placeholder="Ingresa tu nueva contraseña...">
								</div>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">

								<button type="submit" class="btn btn-danger">Editar</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Modal borrar -->
			<div id="deleteModal<?php echo $registro['id'];  ?>" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="../../controller/usuario.php?request=borrarU" method="POST">
							<input type="hidden" name="borrar" value="<?php echo $registro['correo']; ?>">
							<input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
							<div class="modal-header">
								<h4 class="modal-title">Borrar Usuario</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<p>¿Está seguro que desea borrar a <?php echo $registro['nombre_completo'];  ?>?</p>
								<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
								<button type="submit" class="btn btn-danger" onclick=""> Borrar </button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Añadir empleado -->
			<div id="addusuarioModal" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="../../controller/usuario.php?request=addU" method="POST">
							<div class="modal-header">
								<h4 class="modal-title">Agregar Usuario</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="text-dark">Nombre</label>
									<input type="text" name="nombre" class="form-control" placeholder="Ingresa tú nombre..." required>
								</div>
								<div class="form-group">
									<label class="text-dark">Correo</label>
									<input type="email" name="email" class="form-control" placeholder="Ingresa tú correo electrónico..." required>
								</div>
								<div class="form-group">
									<label class="text-dark">Contraseña</label>
									<input type="password" name="pass" class="form-control" placeholder="Ingresa tú contraseña..." required>
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

			<!-- Buscarr usuario -->
			<div id="buscarusuario" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content" style="background-color: #212529; color:whitesmoke;">
						<form action="dashboard.php?list=bs" method="POST">
							<div class="modal-header">
								<h4 class="text-center"><b>Buscar Usuario</b> </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="text-align: center;" >
								<h5 style="margin-bottom: 20px;"><b>Ingresa el nombre o correo del usuario: </b> </h5>
								<input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text"  name="buscar">
								<button type="submit" class="btn btn-danger"><b>Buscar</b>  </button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="editfoto<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker"> 
			<!-- Crea un id para identifar una ventana modal, para al dar clic al botón abra esa y solo esa. -->
				<div class="modal-dialog">
					<div class="modal-content bg-secondary">
						<form action="../../controller/usuario.php?request=imagen" method="POST" enctype="multipart/form-data">
							<div class="modal-header">
								<h4 class="modal-title">Editar imagen</h4>
								<input type="hidden" class="form-control" name="id" value="<?php echo $registro['id'];  ?>" required>
								<!-- Input permite al usuario ingresar -->
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body text-center">
							<label  class="text-center" ><h6 class="text-dark text-center" style="text-align: center;"><b>¡Selecciona tu foto!</b></h6><input style="display: none;"  type="file" accept="image/*"   name="imagens" ></label>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">

								<button type="submit" class="btn btn-danger">Editar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="addfoto<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker"> 
			<!-- Crea un id para identifar una ventana modal, para al dar clic al botón abra esa y solo esa. -->
				<div class="modal-dialog">
					<div class="modal-content bg-secondary">
						<form action="../../controller/usuario.php?request=imagen" method="POST" enctype="multipart/form-data">
							<div class="modal-header">
								<h4 class="modal-title">Agregar imagen</h4>
								<input type="hidden" class="form-control" name="id" value="<?php echo $registro['id'];  ?>" required>
								<!-- Input permite al usuario ingresar -->
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body text-center">
							<label  class="text-center" ><h6 class="text-dark text-center" style="text-align: center;"><b>¡Selecciona tu foto!</b></h6><input style="display: none;"  type="file" accept="image/*"   name="imagens" ></label>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">

								<button type="submit" class="btn btn-danger">Agregar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="editadminModal<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker"> 
			<!-- Crea un id para identifar una ventana modal, para al dar clic al botón abra esa y solo esa. -->
				<div class="modal-dialog">
					<div class="modal-content bg-secondary">
						<form action="../../controller/usuario.php?request=editadmin" method="POST">
							<div class="modal-header">
								<h4 class="modal-title">Editar Usuario</h4>
								<input type="hidden" class="form-control" name="id" value="<?php echo $registro['id'];  ?>" required>
								<input type="hidden" class="form-control" name="clave" value="<?php echo $registro['clave'];  ?>" required>
								<!-- Input permite al usuario ingresar -->
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="text-dark">Nombre</label>
									<input type="text" class="form-control" name="nami" value="<?php echo $registro['nombre_completo'];  ?>" required>
								</div>
								<div class="form-group">
									<label class="text-dark">Contraseña actual</label>
									<input type="password" class="form-control" name="password" placeholder="Ingresa tu cotraseña actual..." required >
								</div>
								<div class="form-group">
									<label class="text-dark"> Nueva contraseña</label>
									<input type="password" class="form-control" name="pass" placeholder="Ingresa tu nueva contraseña...">
								</div>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">

								<button type="submit" class="btn btn-danger">Editar</button>
							</div>
						</form>
					</div>
				</div>
			</div>