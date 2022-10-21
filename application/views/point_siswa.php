

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Point Siswa
                            <a href="<?php echo base_url('pointsiswa/tambah_data'); ?>" 
                            class="btn btn-primary btn-sm float-right">TAMBAH POINT SISWA <i class="fa fa-plus"></i></a>
                            
                        </div>  
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <td>NO</td>
      <!-- <td>NISN</td> -->
      <td>NIS</td>
      <td>NAMA SISWA</td>
      <td>JUMLAH PELANGARAN</td>
      <!-- <td>KETERANGAN</td> -->
      <td>AKSI</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($tbl_point_siswa as $point) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <!-- <td><?php echo $point['nisn']; ?></td> -->
      <td><?php echo $point['nis']; ?></td>
      <td><?php echo $point['nm_siswa']; ?></td>
      <td><?php echo $point['pointsiswa']; ?></td>
      <!-- <td><?php echo $point['keterangan']; ?></td> -->
    <td>
    <a href="<?php echo base_url() ?>pointsiswa/detail/<?php echo $point['kd_siswa']; ?>" class="badge badge-primary"><i class="fa-solid fa-eye"></i></a>
      <a href="<?php echo base_url() ?>point/edit_data/<?php echo $point['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-plus"></i></a>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      

</div>
</div>
</div>
</div>