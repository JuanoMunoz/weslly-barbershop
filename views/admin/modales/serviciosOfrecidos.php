<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $servicio['id_s'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h3 class="modal-title text-uppercase" id="exampleModalLabel">SERVICIO</h3>
        <h3 class="modal-title text-uppercase text-primary" style="margin-left: 5px;" id="exampleModalLabel"> <?php echo $servicio["nombre_servicio"]  ?> </h3>
        <button type="button" class="btn-close bg-primary " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-secondary">
        <?php
        if (!empty($servicio["imagen"])) { ?>
          <img src="data:<?php echo $servicio['tipo_foto']; ?>;base64,<?php echo base64_encode($servicio["imagen"]); ?>" style="max-width: 470px;">
        <?php } else { ?>
          <img style="max-width: 470px;" src="../assets/img/notdispo.png">
      <?php  } ?>
      </div>

    </div>
  </div>
</div>