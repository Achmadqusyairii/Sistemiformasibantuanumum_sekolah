

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kelas
                            <a href="<?php echo base_url('kelas/tambah_data'); ?>" 
                            class="btn btn-primary btn-sm float-right">TAMBAH DATA <i class="fa fa-plus"></i></a>
                            
                        </div>  
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <td>NO</td>
      <td>KODE KELAS</td>
      <td>NAMA KELAS</td>
      <td>AKSI</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($tbl_kelas as $kelas) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $kelas['kode_kelas']; ?></td>
      <td><?php echo $kelas['nm_kelas']; ?></td>
    <td>
      <a href="<?php echo base_url() ?>kelas/edit_data/<?php echo $kelas['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-pen"></i></a>
      <a href="<?php echo base_url() ?>kelas/hapus_data/<?php echo $kelas['id']; ?>" class="badge badge-danger"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      

</div>
</div>
</div>
</div>