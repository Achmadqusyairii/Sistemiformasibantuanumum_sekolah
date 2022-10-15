<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">EDIT DATA SISWA </h6>
<br>

<form method="post" action ="<?php echo base_url ('siswa/edit_data_siswa'); ?>">
<input type="hidden" name="id" value="<?php echo  $tbl_siswa['id'];?>">

  <div class="from-gruop row">
    <label for="id" class="col-sm-2 col-form-label">EDIT POINT</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="kd_siswa"required="" value="<?php echo $tbl_siswa['kd_siswa'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE SISWA</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nm_point"
    required="" value="<?php echo $tbl_siswa['kd_siswa'];?>">
  </div>
</div>
<div class="from-gruop row">
          <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nisn"
            required="" value="<?php echo $tbl_siswa['nisn'];?>">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nis" class="col-sm-2 col-form-label">NIS</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nis"
            required="" value="<?php echo $tbl_siswa['nis'];?>">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nm_siswa" class="col-sm-2 col-form-label">NAMA SISWA</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="nm_siswa"
            required="" value="<?php echo $tbl_siswa['nm_siswa'];?>">
          </div>
        </div>
<div class="from-gruop row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class = "col-sm-5">
    <button type="submit" class="btn btn-primary">Edit</button>

  </div>
</div>
</form>
</div>
</div>
</div>