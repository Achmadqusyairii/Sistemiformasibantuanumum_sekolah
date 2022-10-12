<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">EDIT DATA MATA PELAJARAN </h6>
<br>

<form method="post" action ="<?php echo base_url ('point/edit_data_point'); ?>">
<input type="hidden" name="id" value="<?php echo  $tbl_point['id'];?>">

  <div class="from-gruop row">
    <label for="id" class="col-sm-2 col-form-label">EDIT POINT</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="kd_point"required="" value="<?php echo $tbl_point['kd_point'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA POINT</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nm_point"
    required="" value="<?php echo $tbl_point['nm_point'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">NILAI POINT</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nilai_point"
    required="" value="<?php echo $tbl_point['nilai_point'];?>">
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