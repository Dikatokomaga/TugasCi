<div class= "container">
    <div class ="row mt-3">
        <div class="col-md-6">

   <div class="card">
  <div class="card-header">
    Form tambah data 
  </div>
  <div class="card-body">

      <form action="" method="post">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" >
        <small class="form-text text-danger"><?php echo form_error('nama');?></small>
      </div> 
      
        <div class="form-group">
        <label for="nrp">Nrp</label>
        <input type="number" name="nrp" class="form-control" id="nrp">
        <small class="form-text text-danger"><?php echo form_error('nrp');?></small>
      </div> 

        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        <small class="form-text text-danger"><?php echo form_error('email');?></small>
      </div>

      <div class="form-group">
    <label for="jurusan ">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Bangunan ">Teknik Bangunan</option>
      <option value="Informatika ">Informatika</option>
      <option value="Arsitektur">Arsitektur</option>
      <option value="Kehewanan ">Kehewanan</option>
    </select>
    </div>
    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

      </div> 

        </form>
  </div>
</div>

   


        </div>
    </div>
</div>