

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Nama Siswa        : <?= $detail[0]['nm_siswa']; ?>
                            <h6 class="m-0 font-weight-bold text-primary">Nomor Induk Siswa :  <?= $detail[0]['nis']; ?>
                            <h6 class="m-0 font-weight-bold text-primary">Kelas :  <?= $detail[0]['nm_kelas']; ?>
                            <a href="<?php echo base_url('pointsiswa/tambah_data'); ?>" 
                            class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i>KEMBALI </a>
                            
                        </div>  
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <td>NO</td>
      <!-- <td>NISN</td> -->
      <!-- <td>NIS</td> -->
      <!-- <td>NAMA SISWA</td> -->
      <td>NAMA PELANGARAN</td>
      <td>NILAI POINT</td>
      <td>KETERANGAN</td>
      <td>TANGGAL POINT</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($detail as $point) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $point['nm_point']; ?></td>
      <td><?php echo $point['nilai_point']; ?></td>
      <td><?php echo $point['keterangan']; ?></td>
      <td><?php echo $point['tanggal']; ?></td>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      
`
</div>
</div>
</div>
</div>