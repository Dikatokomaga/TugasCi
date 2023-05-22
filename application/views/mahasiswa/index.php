
<div class="container">
    <?php if($this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data mahasiswa <strong>Berhasil rek</strong> <?php echo $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>
        </div>
    </div>
<?php endif; ?>


    <div class= "row mt-3">
        <div class = "col-md-6">
            <a href="<?php echo base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah data </a>

        </div>
    </div>

    <div class="row mt-3">
        <div class="col md-6">
        <form action="" method ="POST">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Cari Data" name="keyword"> 
                    <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" >Cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
        <div class = col-md-8>
            <h3> Daftar mahasiswa</h3>
            <?php if(empty($idmahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
               Mahasiswa Adios
                </div>
            <?php endif ?>    

    <ul class="list-group">
    <?php foreach($idmahasiswa as $mhs) : ?>
             <li class="list-group-item"><?php echo $mhs['nama'] ?>

        <a href="<?php echo base_url();?>mahasiswa/hapus/<?php echo $mhs['id'];?>" class=" badge badge-danger float-right" onclick="return confirm('yakin dek?');">Hapus</a>   

        <a href="<?php echo base_url();?>mahasiswa/ubah/<?php echo $mhs['id'];?>" class=" badge badge-success float-right"">Ubah </a>  
         
        <a href="<?php echo base_url();?>mahasiswa/detail/<?php echo $mhs['id'];?>" class=" badge badge-primary float-right"">Detail </a>   

        </li>
    <?php  endforeach; ?>
    </ul>
        </div>
    </div>
</div>