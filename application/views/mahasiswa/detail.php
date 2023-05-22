<div class="container">
    <div class="row mt-3">
        <div class="row md-6">
        <div class="card">
         <div class="card-header">
             Detail mahasiswa
         </div>
         <div class="card-body">
          <h5 class="card-title"><?php echo $idmahasiswa ['nama']; ?></h5>

          <h6 class="card-subtitle mb-2 text-muted"><?php echo $idmahasiswa ['email']; ?></h6>

          <p class="card-text"><?php echo $idmahasiswa ['nrp']; ?></p>

          <p class="card-text"><?php echo $idmahasiswa ['jurusan']; ?></p>
          <a href="<?php echo base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
         </div>
        </div>
        </div>
    </div>
</div>