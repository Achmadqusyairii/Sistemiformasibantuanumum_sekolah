<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA KELAS </h6>
<br>
<form method="post" action ="<?php echo base_url ('kelas/tambah_data_kelas'); ?>">
  <div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">KODE KELAS</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="kd">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA KELAS</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kelas">
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