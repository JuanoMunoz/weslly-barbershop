<div id="buscarmsj" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content" style="background-color: #212529; color:whitesmoke;">
						<form action="mensajes.php?list=bs" method="POST">
							<div class="modal-header">
								<h4 class="text-center"><b>Buscar Mensaje</b> </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="text-align: center;" >
								<h5 style="margin-bottom: 20px;"><b>Ingresa el nombre, correo o número del usuario: </b> </h5>
								<input style="margin-bottom: 50px; padding-bottom:6px; padding-top: 6px;" type="text"  name="buscar">
								<button type="submit" class="btn btn-danger"><b>Buscar</b>  </button>
							</div>
						</form>
					</div>
				</div>
</div>
<div id="wasaCitaModal<?php echo $registro['id']; ?>" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="" method="POST">
							<div class="modal-header">						
								<h4 class="modal-title mx-auto" >Abrir Whatsapp</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
							</div>
							<div class="modal-body">	
                
                <img  src="../../assets/img/whatsapp.png" height="60%" width="60%" alt="whatsapp" style="padding-left: 130px; padding-bottom: 20px; padding-top: 10px;">				
								<br>
                <p class="text-center">¿Desea comunicarse con <?php echo $registro['nombre_completo']; ?>?</p>
								<p class="text-warning text-center"><small>Esta acción abrirá una pestaña nueva.</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $registro["numero"]; ?>" type="button" class="btn btn-danger">Ir</a></button>
							</div>
						</form>
					</div>
				</div>
			</div>
            <div id="llamadaCitaModal<?php echo $registro['id']; ?>" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="" method="POST">
							<div class="modal-header">						
								<h4 class="modal-title mx-auto" > Llamar</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
							</div>
							<div class="modal-body">	
                
                <img  src="../../assets/img/telefono-negro.png" height="60%" width="60%" alt="whatsapp" style="padding-left: 130px; padding-bottom: 20px; padding-top: 10px;">				
								<br>
                <p class="text-center">¿Desea llamar a <?php echo $registro['nombre_completo']; ?>?</p>
								<p class="text-warning text-center"><small>Esta acción abrirá una pestaña nueva.</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							  <a target="_blank" href="tel:+57<?php echo $registro["numero"]; ?>" type="button" class="btn btn-danger">Ir</a></button>
							</div>
						</form>
					</div>
				</div>
			</div>

            <div id="mailCitaModal<?php echo $registro['id']; ?>" class="modal fade bg-darker">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="" method="POST">
							<div class="modal-header">						
								<h4 class="modal-title mx-auto" > Enviar Correo</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
							</div>
							<div class="modal-body">	
                
                <img  src="../../assets/img/correote.webp" height="80%" width="80%" alt="whatsapp" style="padding-left: 70px;">				
								<br>
                <p class="text-center">¿Desea enviar un correo a <?php echo $registro['nombre_completo']; ?>?</p>
								<p class="text-warning text-center"><small>Esta acción abrirá una pestaña nueva.</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							  <a target="_blank" href="mailto:<?php echo $registro["email"]; ?>" type="button" class="btn btn-danger">Ir</a></button>
							</div>
						</form>
					</div>
				</div>
			</div>
