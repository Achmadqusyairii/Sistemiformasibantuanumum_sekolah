<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">EDIT DATA JABATAN </h6>
<br>

<form method="post" action ="<?php echo base_url ('jabatan/edit_data_jabatan'); ?>">
<input type="hidden" name="id" value="<?php echo  $tbl_jabatan['id'];?>">

  <div class="from-gruop row">
    <label for="id" class="col-sm-2 col-form-label">EDIT JABATAN</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="kd"
    required="" value="<?php echo $tbl_jabatan['kd_jabatan'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">Jabatan</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="jabatan"
    required="" value="<?php echo $tbl_jabatan['jabatan'];?>">
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