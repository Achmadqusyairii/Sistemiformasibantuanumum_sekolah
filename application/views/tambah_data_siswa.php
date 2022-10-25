<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA SISWA </h6>
      <br>
      <form method="post" action="<?php echo base_url('siswa/tambah_data_siswa'); ?>">
        <div class="from-gruop row">
          <label for="kd_siswa" class="col-sm-2 col-form-label">KODE SISWA</label>
          <div class="col-sm-5">
            <input type="number" class="from-control" name="kd_siswa">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nisn">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nis" class="col-sm-2 col-form-label">NIS</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nis">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nm_siswa" class="col-sm-2 col-form-label">NAMA SISWA</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nm_siswa">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nm_siswa" class="col-sm-2 col-form-label">KELAS</label>
          <div class="col-sm-5">
          <select name="kd_kelas" id="kd_p">
      <?php
        foreach ($tbl_kelas as $kelas) {?>
          <option value="<?= $kelas['kode_kelas'] ?>"><?= $kelas['nm_kelas'] ?></option>
        <?php } ?>
    </select>
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nm_wali" class="col-sm-2 col-form-label">NAMA WALI</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nm_wali">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nm_siswa" class="col-sm-2 col-form-label">NIK WALI</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nik_wali">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nm_siswa" class="col-sm-2 col-form-label">NO TELEPON</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="tlpon">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-5">
            <button type="submit" class="btn btn-primary">SIMPAN</button>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>