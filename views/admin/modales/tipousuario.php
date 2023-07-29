  <!-- MODAL EMPLEADOS< -->
  <div id="addempleadoModal" class="modal fade bg-darker bg-darker">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="../../controller/identificacionc.php?doc=add" method="POST">
                            <div class="modal-header">						
                                <h4 class="modal-title">Agregar Documento</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                    <input type="hidden" name="id" class="form-control" >
								<div class="form-group">
                                    <label class="text-dark">Tipo de documento</label>
                                    <input type="text" name="acr" class="form-control"placeholder="Ingresa un documento..."    required>
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Siglas</label>
                                    <input type="text" name="documento" class="form-control"placeholder="Ingrese las siglas de su documento..."    required>
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
  <div id="editempleadoModal<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content bg-secondary">
						<form action="../../controller/identificacionc.php?doc=editarE" method="POST">
						<input type="hidden" class="form-control" name="id" value="<?php echo $registro['id'];  ?>" required>
							<div class="modal-header">						
								<h4 class="modal-title">Editar Documento</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
                                <div class="form-group">
                                    <label class="text-dark">Tipo de documento</label>
                                    <input type="text" name="acr" class="form-control" value="<?php echo $registro['documento'];  ?>"   required>
                                </div>
								<div class="form-group">
                                    <label class="text-dark">Acrónimo</label>
                                    <input type="text" name="documento" class="form-control" value="<?php echo $registro['tipo_documento'];  ?>"    required>
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
<div id="deleteempleadoModal<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="../../controller/identificacionc.php?doc=borrarE" method="POST">
                            <input type="hidden" name="borrar" value="<?php echo $registro['id']; ?>">
							<div class="modal-header">						
								<h4 class="modal-title">Borrar Documento</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
								<p>¿Está seguro que desea borrar el documento? (<?php echo $registro['tipo_documento'];  ?>)</p>
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
			<div id="buscarusuario" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content" style="background-color: #212529; color:whitesmoke;">
						<form action="identificacion.php?list=bs" method="POST">
							<div class="modal-header">
								<h4 class="text-center"><b>Buscar Documento</b> </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="text-align: center;" >
								<h5 style="margin-bottom: 20px;"><b>Ingresa el nombre de la identificación: </b> </h5>
								<input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text"  name="buscar">
								<button type="submit" class="btn btn-danger"><b>Buscar</b>  </button>
							</div>
						</form>
					</div>
				</div>
			</div>
 