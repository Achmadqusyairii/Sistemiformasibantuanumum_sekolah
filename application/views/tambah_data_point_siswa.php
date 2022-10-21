<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA POINT</h6>
<br>
<form method="post" action ="<?php echo base_url ('pointsiswa/tambah_data_point_siswa'); ?>">
  <div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">NAMA SISWA</label>
    <div class = "col-sm-5">
    <select name="kd_siswa" id="kd_p">
      <?php
        foreach ($tbl_siswa as $point) {?>
          <option value="<?= $point['kd_siswa'] ?>"><?= $point['nm_siswa'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">POINT SISWA</label>
    <div class = "col-sm-5">
    <select name="kd_point" id="kd_p">
      <?php
        foreach ($tbl_point as $point) {?>
          <option value="<?= $point['kd_point'] ?>"><?= $point['nm_point'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
          <label for="keterangan" class="col-sm-2 col-form-label">KETERANGAN</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="keterangan">
          </div>
        </div>
<div class="from-gruop row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class = "col-sm-5">
    <button type="submit" class="btn btn-primary">SIMPAN</button>

  </div>
</div>
</form>
</div>
</div>
</div>