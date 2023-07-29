  <!-- MODAL EMPLEADOS< -->
  <div id="addempleadoModal" class="modal fade bg-darker">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="../../controller/empleado.php?emp=addE" method="POST">
                            <div class="modal-header">						
                                <h4 class="modal-title">Agregar Empleado</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                <div class="form-group">
                                    <label class="text-dark">Nombre</label>
                                    <input type="text" name="nempleado" class="form-control" placeholder="Ingresa tú nombre..." required>
                                </div>
								<div class="form-group">
                                    <label class="text-dark">Tipo Documento</label>
                                    <select name="doc" class="form-control " >
										<?php
											include ("../../model/conexion.php");
											$sql= $conexion->query("SELECT * FROM documento");
											$lista= $sql->fetch_all(MYSQLI_ASSOC);
											foreach ($lista as $doc ) {
										?>
												<option style="font-size: 13px;" value="<?php echo $doc['id']?>"><?php echo $doc['tipo_documento']?></option>
										<?php
											}
  										?>
									</select>
                                </div>
								<div class="form-group">
                                    <label class="text-dark">Número documento</label>
                                    <input type="number" name="documento" class="form-control" placeholder="Ingresa tú número de documento..." required min="1" pattern="[0-9]">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Teléfono</label>
                                    <input type="number" name="templeado" class="form-control"placeholder="Ingresa tú número teléfonico..."  min="1" pattern="[0-9]"  required>
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Contraseña</label>
                                    <input type="password" name="cempleado" class="form-control" placeholder="Ingresa tú contraseña..." required>
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
  <div id="editempleadoModal<?php echo $registro['id_empleado']; ?>" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content bg-secondary">
						<form action="../../controller/empleado.php?emp=editarE" method="POST">
						<input type="hidden" class="form-control" name="id" value="<?php echo $registro['id_empleado'];  ?>" required>
							<div class="modal-header">						
								<h4 class="modal-title">Editar Empleado</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
								<div class="form-group">
									<label class="text-dark">Nombre </label>
									<input type="text" class="form-control" name="nempleado" value="<?php echo $registro['nombre_empleado'];  ?>" required>
								</div>
								<div class="form-group">
                                    <label class="text-dark">Tipo Documento</label>
                                    <select name="doc" class="form-control " >
										<?php
											include ("../../model/conexion.php");
											$tipodoc= $registro['id'];
											$sql= $conexion->query("SELECT * FROM documento WHERE id!='$tipodoc'");
											$sequeel= $conexion->query("SELECT * FROM documento WHERE id='$tipodoc'");
											$lista1= $sequeel->fetch_all(MYSQLI_ASSOC);
											$lista= $sql->fetch_all(MYSQLI_ASSOC);
											foreach ($lista1 as $prueba ) {?>
											<option selected style="font-size: 13px;" value="<?php echo $prueba['id'];?>"> <?php echo $prueba['tipo_documento']?></option>
										<?php }	foreach ($lista as $doc ) {
										?>
												<option style="font-size: 13px;" value="<?php echo $doc['id']?>"><?php echo $doc['tipo_documento']?></option>
										<?php
											}
  										?>
									</select>
                                </div>
								<div class="form-group">
									<label class="text-dark">Contraseña</label>
									<input type="password" class="form-control" name="cempleado" value="<?php echo $registro['clave'];  ?>" required>
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
<div id="deleteempleadoModal<?php echo $registro['id_empleado']; ?>" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="../../controller/empleado.php?emp=borrarE" method="POST">
                            <input type="hidden" name="borrar" value="<?php echo $registro['id_empleado']; ?>">
							<div class="modal-header">						
								<h4 class="modal-title">Borrar Usuario</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
								<p>¿Está seguro que desea borrar a <?php echo $registro['nombre_empleado'];  ?>?</p>
								<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
								<button type="submit" class="btn btn-danger"> Borrar </button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="buscarusuario" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content" style="background-color: #212529; color:whitesmoke;">
						<form action="empleado.php?list=bs" method="POST">
							<div class="modal-header">
								<h4 class="text-center"><b>Buscar Empleado</b> </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="text-align: center;" >
								<h5 style="margin-bottom: 20px;"><b>Ingresa el nombre o correo del empleado: </b> </h5>
								<input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text"  name="buscar">
								<button type="submit" class="btn btn-danger"><b>Buscar</b>  </button>
							</div>
						</form>
					</div>
				</div>
			</div>
 