<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA JABATAN </h6>
      <br>
      <form id="form-jabatan" method="post" action="<?php echo base_url('jabatan/tambah_data_jabatan'); ?>">
        <div class="from-gruop row">
          <label for="kd" class="col-sm-2 col-form-label">KODE JABATAN</label>
          <div class="col-sm-5">
            <input type="number" class="from-control" name="kd">
          </div>
        </div>
        <div class="from-gruop row">
          <label for="nama" class="col-sm-2 col-form-label">NAMA JABATAN</label>
          <div class="col-sm-5">
            <input type="text" class="from-control" name="jabatan">
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

<script>
  $(document).ready(function() {
    $('#form-jabatan').on('submit', function(e) { //form adalah name id () ketika di submmit
      e.preventDefault(); // dari fuction  // prevet untuk hilangkan sifat bawaan form
      if (confirm('apakah anda yakin mau menyimpan data ?'))
      {
        $.ajax({
          url : $(this).prop('action'),
          data: $(this).serialize(),
          method: 'POST',
          success: function(data){
            data = $.parseJSON(data);
            swal("Kerja bagus!", data.message, "sukses");
            setTimeout(function(){
              window.location.href = '<?= base_url('jabatan') ?>';
            }, 2000);
          },
          error: function(jhr, textStatus){
            swal("Gagal Nih", "Anda mengklik tombol! ", " sukses ");
          }
        })
      }
    });
  });
</script>