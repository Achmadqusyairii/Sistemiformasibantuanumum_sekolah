<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DAFTAR SISWA
        <a href="<?php echo base_url('siswa/tambah_data'); ?>" class="btn btn-primary btn-sm float-right">TAMBAH DATA <i class="fa fa-plus"></i></a>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td>NO</td>
              <td>KODE SISWA</td>
              <td>NISN</td>
              <td>NIS</td>
              <td>NAMA SISWA</td>
              <td>KELAS</td>
              <td>AKSI</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($tbl_siswa as $siswa) : ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $siswa['kd_siswa']; ?></td>
                <td><?php echo $siswa['nisn']; ?></td>
                <td><?php echo $siswa['nis']; ?></td>
                <td><?php echo $siswa['nm_siswa']; ?></td>
                <td><?php echo $siswa['kode_kelas']; ?></td>
                <td>
                  <a href="<?php echo base_url() ?>siswa/edit_data/<?php echo $siswa['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-pen"></i></a>
                  <a onclick="return confirm('Yakin Logout?');"href="<?php echo base_url() ?>siswa/hapus_data/<?php echo $siswa['id']; ?>" class="badge badge-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>

            <?php endforeach ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
<a onclick="return confirm('Yakin Logout?');