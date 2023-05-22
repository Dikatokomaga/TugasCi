<div class="container">
<h3 class = "mt-3"> List orang posting </h3>

<div class="row">
    <div class="col-md-6">
        <form action="<?php echo base_url('orang'); ?>" method="post">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search keyword" name="keyword" autocomplete="off" autofocus>

        <div class="input-group-append">
        <input class="btn btn-primary" type="submit" name="submit" >
        </div>
        </div>
        </form>
    </div>
</div>
    <div class="row">
        <div class="col-md-10">
        <h5> Result : <?php echo $total_rows  ?></h5>    
           <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php if(empty($orang)) : ?>
                <tr>
                    <td colspan="4" >
                    <div class="alert alert-danger" role="alert">
                    Mas nya loh rek lucu banget malah gak nemu
                    </div> 
                    </td>
                </tr>
             <?php endif; ?>   
            <tbody>
                <?php foreach($orang as $org) : ?>
                <tr>
                    <th><?php echo ++$start; ?></th>
                    <td><?php  echo $org['nama']; ?></td>
                    <td> <?php echo $org['Email']; ?> </td>
                    <td>
                        <a href="" class="badge badge-warning">detail</a>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
           </table>
           <?php echo  $this->pagination->create_links(); ?>
        </div>
    </div>
</div>