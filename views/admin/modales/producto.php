			<!-- Edit Modal HTML -->
			<div id="editproductoModal<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker">
			  <div class="modal-dialog">
			    <div class="modal-content bg-secondary">
			      <form action="../../controller/productoc.php?pto=editarP" method="POST" enctype="multipart/form-data">
			        <div class="modal-header">
			          <h4 class="modal-title">Editar producto</h4>
			          <input type="hidden" name="borrar" value="<?php echo $registro['id'];  ?>">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        </div>
			        <div class="modal-body">
			          <div class="form-group">
			            <label class="text-dark">Nombre</label>
			            <input type="text" value="<?php echo $registro["nombre"]; ?>" name="nombre" class="form-control" required>
			          </div>
			          <div class="form-group">
			            <label class="text-dark">Precio</label>
			            <input type="number" value="<?php echo $registro["precio"]; ?>" name="precio" class="form-control" min="1" pattern="[0-9]" required>
			          </div>
			          <div class="form-group">
			            <label class="text-dark">Descripción</label>
			            <textarea class="form-control" name="dc" required><?php echo $registro["descripcion"]; ?></textarea>
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
			            <label class="boton text-white ">¡Selecciona tú foto!<input style="display: none;" accept="image/*" type="file" name="imgg"></label>
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
			<div id="deleteproductoModal<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <form action="../../controller/productoc.php?pto=borrarP" method="POST">
			        <div class="modal-header">
			          <h4 class="modal-title">Borrar producto</h4>
			          <input type="hidden" name="borrar" value="<?php echo $registro['id'];  ?>">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        </div>
			        <div class="modal-body">
			          <p>¿Está seguro que desea borrar este producto? (<?php echo $registro['nombre'];  ?>)</p>
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
			<!-- Añadir producto -->
			<div id="addproductoModal" class="modal fade bg-darker bg-darker">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <form action="../../controller/productoc.php?pto=addP" method="POST" enctype="multipart/form-data">
			        <div class="modal-header">
			          <h4 class="modal-title">Agregar producto</h4>
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        </div>
			        <div class="modal-body">
			          <div class="form-group">
			            <label class="text-dark">Id</label>
			            <input type="number" name="id" class="form-control" placeholder="Agrega el id de tu producto..." min="1" pattern="^[0-9]+" required>
			          </div>
			          <div class="form-group">
			            <label class="text-dark">Nombre</label>
			            <input type="text" name="nombre" class="form-control" placeholder="Agrega el nombre de tu producto..." required>
			          </div>
			          <div class="form-group">
			            <label class="text-dark">Cantidad</label>
			            <input type="number" name="cantidad" class="form-control" placeholder="Agrega la cantidad de productos que quieras comprar..." min="1" pattern="[0-9]" required>
			          </div>
			          <div class="form-group">
			            <label class="text-dark">Precio</label>
			            <input type="number" name="precio" class="form-control" placeholder="Agrega un precio para el producto..." min="1" pattern="[0-9]" required>
			          </div>
			          <div class="form-group">
			            <label class="text-dark">Descripción</label>
			            <textarea class="form-control" name="dc" required placeholder="Agrega una descripción para el producto"></textarea>
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
			            <label class="boton text-white ">¡Selecciona una foto!<input style="display: none;" accept="image/*" type="file" name="imagens"></label>
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

			<div id="eliminarproducto<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <form action="../../controller/productoc.php?pto=reducirP" method="POST">
			        <div class="modal-header">
			          <h4 class="modal-title">Reducir cantidad</h4>
			          <input type="hidden" name="borrar" value="<?php echo $registro['id'];  ?>">
			          <input type="hidden" name="cantidada" value="<?php echo $registro['cantidad'];  ?>">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        </div>
			        <div class="modal-body">
			          <p>Ingresa la cantidad a reducir del producto <?php echo $registro['nombre']; ?>:</p>                                                                 
			          <div class="form-group">
			            <label class="text-dark">Cantidad</label>
			            <input type="number" name="cantidadr" class="form-control" min="1" pattern="[0-9]" required>
			          </div>
			        </div>
			        <div class="modal-footer">
			          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
			          <input type="submit" class="btn btn-danger" value="Reducir">
			        </div>
			      </form>
			    </div>
			  </div>
			</div>

      <div id="agregarproducto<?php echo $registro['id']; ?>" class="modal fade bg-darker bg-darker">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <form action="../../controller/productoc.php?pto=agregarP" method="POST">
			        <div class="modal-header">
			          <h4 class="modal-title">Agregar cantidad</h4>
			          <input type="hidden" name="borrar" value="<?php echo $registro['id'];  ?>">
			          <input type="hidden" name="cantidada" value="<?php echo $registro['cantidad'];  ?>">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        </div>
			        <div class="modal-body">
			          <p>Ingresa la cantidad a agregar del producto <?php echo $registro['nombre']; ?>:</p>                                                                 
			          <div class="form-group">
			            <label class="text-dark">Cantidad</label>
			            <input type="number" name="cantidadr" class="form-control" min="1" pattern="[0-9]" required>
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

			<div id="buscarproducto" class="modal fade bg-darker bg-darker">
				<div class="modal-dialog">
					<div class="modal-content" style="background-color: #212529; color:whitesmoke;">
						<form action="productos.php?list=bs" method="POST">
							<div class="modal-header">
								<h4 class="text-center"><b>Buscar Producto</b> </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="text-align: center;" >
								<h5 style="margin-bottom: 20px;"><b>Ingresa el nombre, id o descripción del producto: </b> </h5>
								<input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text"  name="buscar">
								<button type="submit" class="btn btn-danger"><b>Buscar</b>  </button>
							</div>
						</form>
					</div>
				</div>
			</div>