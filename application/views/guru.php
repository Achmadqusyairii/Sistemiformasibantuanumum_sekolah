

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DAFTAR GURU
                            <a href="<?php echo base_url('guru/tambah_data'); ?>" 
                            class="btn btn-primary btn-sm float-right">TAMBAH DATA <i class="fa fa-plus"></i></a>
                            
                        </div>  
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <td>NO</td>
      <td>KODE GURU</td>
      <td>NIP</td>
      <td>NAMA</td>
      <td>JABATAN</td>
      <td>MATA PELAJARAN</td>
      <td>AKSI</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($tbl_guru as $guru) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $guru['kd_guru']; ?></td>
      <td><?php echo $guru['nip']; ?></td>
      <td><?php echo $guru['nama']; ?></td>
      <td><?php echo $guru['kd_jabatan']; ?></td>
      <td><?php echo $guru['kd_mapel']; ?></td>
    <td>
      <a href="<?php echo base_url() ?>guru/edit_data/<?php echo $guru['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-pen"></i></a>
      <a href="<?php echo base_url() ?>guru/hapus_data/<?php echo $guru['id']; ?>" class="badge badge-danger"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      

</div>
</div>
</div>
</div>