<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA GURU </h6>
<br>
<form method="post" action ="<?php echo base_url ('guru/tambah_data_guru'); ?>">
  <div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">KODE GURU</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="kd_guru">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">NIP</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nip">
  </div>
</div>
<div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">NAMA</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nama">
  </div>
</div>
<div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">JABATAN</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_p"> -->
    <select name="kd_jabatan" id="kd_p">
      <?php
        foreach ($tbl_jabatan as $jabatan) {?>
          <option value="<?= $jabatan['kd_jabatan'] ?>"><?= $jabatan['jabatan'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">MATA PELAJARAN</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_p"> -->
    <select name="kd_mapel" id="kd_mapel">
      <?php
        foreach ($tbl_mapel as $jabatan) {?>
          <option value="<?= $jabatan['kd_mapel'] ?>"><?= $jabatan['nm_mapel'] ?></option>
        <?php } ?>
    </select>
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