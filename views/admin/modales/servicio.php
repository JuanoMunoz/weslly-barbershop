			<!-- Edit Modal HTML -->
			<div id="editservicioModal<?php echo $registro["id_s"];  ?>" class="modal fade bg-darker bg-darker">
			    <div class="modal-dialog">
			        <div class="modal-content bg-secondary">
			            <form action="../../controller/servicioc.php?ser=editarS" method="POST" enctype="multipart/form-data">
			                <div class="modal-header">
			                    <h4 class="modal-title">Editar Servicio</h4>
			                    <input type="hidden" name="id" value="<?php echo $registro["id_s"];  ?>">
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                </div>
			                <div class="modal-body">
			                    <div class="form-group">
			                        <label class="text-dark">Nombre</label>
			                        <input type="text" value="<?php echo $registro["nombre_servicio"];  ?>" name="servicio" class="form-control" required>
			                    </div>
			                    <div class="form-group">
			                        <label class="text-dark">Precio</label>
			                        <input type="number" class="form-control" value="<?php echo $registro["precio"];  ?>" name="precio" min="1" pattern="[0-9]" required>
			                    </div>
			                    <div class="form-group">
			                        <label class="text-dark">Descripción</label>
			                        <textarea class="form-control" name="descripcion" required><?php echo $registro["descripcion"];  ?> </textarea>
			                    </div>
                                <div class="form-group">
			                        <label class="text-dark">Seleccione un nuevo icono</label>
			                        <select class="form-control" name="icono" required>
			                            </option>
			                            <option style="font-size: 13px;" value="../assets/img/mustache.png">Tijeras</option>
			                            <option style="font-size: 13px;" value="../assets/img/haircut.png">Tijeras (Cortando pelo)</option>
			                            <option style="font-size: 13px;" value="../assets/img/mans-shave.png">Cuchilla de afeitar</option>
			                            <option style="font-size: 13px;" value="../assets/img/beard-trim.png">Máquina barbera</option>
			                            <option style="font-size: 13px;" value="../assets/img/hair-dyeing.png">Tintura de pelo</option>
			                        </select>
			                    </div>
			                    <div style="text-align: center;">
			                        <br>
			                        <label class="boton text-white ">¡Selecciona tú foto!<input style="display: none;" accept="image/*" type="file" name="img"></label>
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
			<!-- Delete Modal HTML -->
			<div id="deleteservicioModal<?php echo $registro["id_s"]; ?>" class="modal fade bg-darker bg-darker">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <form action="../../controller/servicioc.php?ser=borrarS" method="POST">
			                <div class="modal-header">
			                    <h4 class="modal-title">Borrar Servicio</h4>
			                    <input type="hidden" name="borrar" value="<?php echo $registro["id_s"]; ?>">
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                </div>
			                <div class="modal-body">
			                    <p>¿Está seguro que desea borrar este producto? (<?php echo $registro['nombre_servicio'];  ?>)</p>
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
			<!-- Añadir empleado -->
			<div id="addservicioModal" class="modal fade bg-darker bg-darker">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <form action="../../controller/servicioc.php?ser=addS" method="POST" enctype="multipart/form-data">
			                <div class="modal-header">
			                    <h4 class="modal-title">Agregar Servicio</h4>
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                </div>
			                <div class="modal-body">
			                    <div class="form-group">
			                        <label class="text-dark">Nombre</label>
			                        <input type="text" placeholder="Ingresa el nombre del servicio..." name="servicio" class="form-control" required>
			                    </div>
			                    <div class="form-group">
			                        <label class="text-dark">Precio</label>
			                        <input type="number" class="form-control" placeholder="Ingresa el precio del servicio..." name="precio" min="1" pattern="[0-9]" required>
			                    </div>
			                    <div class="form-group">
			                        <label class="text-dark">Descripción</label>
			                        <textarea class="form-control" name="descripcion" placeholder="Ingresa una descripción del producto:..." required></textarea>
			                    </div>
			                    <div class="form-group">
			                        <label class="text-dark">Seleccione un icono</label>
			                        <select class="form-control" name="icono" placeholder="Ingresa una descripción del producto:..." required>
			                            <option  hidden disabled style="font-size: 13px;">¡Seleccione un icono para su servicio!
			                            </option>
			                            <option style="font-size: 13px;" value="../assets/img/mustache.png">Tijeras</option>
			                            <option style="font-size: 13px;" value="../assets/img/haircut.png">Tijeras (Cortando pelo)</option>
			                            <option style="font-size: 13px;" value="../assets/img/mans-shave.png">Cuchilla de afeitar</option>
			                            <option style="font-size: 13px;" value="../assets/img/beard-trim.png">Máquina barbera</option>
			                            <option style="font-size: 13px;" value="../assets/img/hair-dyeing.png">Tintura de pelo</option>
			                        </select>
			                    </div>
			                    <div style="text-align: center;">
			                        <br>
			                        <label class="boton text-white ">¡Selecciona tu foto!<input style="display: none;" type="file" accept="image/*" name="img"></label>
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

			<div id="buscarservicios" class="modal fade bg-darker bg-darker">
			    <div class="modal-dialog">
			        <div class="modal-content" style="background-color: #212529; color:whitesmoke;">
			            <form action="servicios.php?list=bs" method="POST">
			                <div class="modal-header">
			                    <h4 class="text-center"><b>Buscar Servicios</b> </h4>
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                </div>
			                <div class="modal-body" style="text-align: center;">
			                    <h5 style="margin-bottom: 20px;"><b>Ingresa el nombre, id o precio del servicio: </b> </h5>
			                    <input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text" name="buscar">
			                    <button type="submit" class="btn btn-danger"><b>Buscar</b> </button>
			                </div>
			            </form>
			        </div>
			    </div>
			</div>