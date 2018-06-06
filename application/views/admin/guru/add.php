<div class="content-wrapper">
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Guru/add">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Induk</label>
                  <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="NIP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_guru" class="form-control" id="inputEmail3" placeholder="Nama Guru">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select name="jenis_kelamin" class="form-control" required>
                          <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kontak</label>
                  <div class="col-sm-10">
                    <input type="text" name="kontak" class="form-control" id="inputEmail3" placeholder="Kontak">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username" onkeyup="check_email(value)" id="inputEmail3" placeholder="Username">
                  </div>
                  <div style="margin-left: 200px" id="email-error" class="note note-error"></div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Masukkan Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-danger" href="<?= base_url('Admin/Guru')?>">Batal</a>
                <button type="submit" class="btn btn-info pull-right" id="tombol_simpan">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<script type="text/javascript">
    runAllForms();
            
    var email_error = 1;
    var password_error = 0;
    var nama_error = 0;
    var check_error = 1;
    
    function check_email(email){
        $.ajax({
            type:'post',
            url:'<?= base_url('Admin/Wali/check_email')?>',
            dataType: 'json',
            data:{username: email},
            success:function(msg){
                if(msg.status && $('#email').val()!=''){
                    $('#email-error').html('<i class="fa fa-check txt-color-green"></i><font color="green">Username bisa digunakan.</font>');
                    email_error = 0;
                    $("#tombol_simpan").prop('disabled', false);
                } else{
                    if($('#email').val()==''){
                        $('#email-error').html('<i class="fa fa-times txt-color-red"></i><font color="red">Username harus diisi.</font>');
                        email_error = 1;
                        $("#tombol_simpan").prop('disabled', true);
                    } else{
                        $('#email-error').html('<i class="fa fa-times txt-color-red"></i><font color="red">Username sudah digunakan.</font>');
                        email_error = 1;
                        $("#tombol_simpan").prop('disabled', true);
                    }
                }
            }
         });
    }
     function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }


</script>