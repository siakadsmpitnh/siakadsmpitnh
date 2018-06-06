<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIAKAD - SMP IT NUR HIDAYAH SURAKARTA</title>
  <link rel="icon" href="<?=base_url("assets/logo.png");?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link href="logo.png" rel="shortcut icon">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">


  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="user" align="center">
      <img src="assets/logo.png" width="100px" height="100px">
    </div><br>
    <div align="center">
      <p>Login SIAKAD SMP IT Nur Hidayah</p>
    </div>
    <?php
        $pesan_sks = $this->session->flashdata('pesan_sks');
        $pesan_ggl = $this->session->flashdata('pesan_ggl');
        ?>
        <?php if (! empty($pesan_sks)) : ?>
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="glyphicon glyphicon-ok"></i> Berhasil!</h4>
          <?php echo $pesan_sks ;?>
        </div>
        <?php endif ?>
        <?php if (! empty($pesan_ggl)) : ?>
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
          <?php echo $pesan_ggl ;?>
        </div>
    <?php endif ?>
    <form action="<?=base_url('Login');?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group">
            <select name="level" class="form-control" required>
              <option value="" selected disabled>Pilih Level User</option>
              <option value="1">Administrator</option>
              <option value="2">Guru</option>
              <option value="3">Wali kelas</option>
            </select>
        </div>
       </div>
          <input type="submit" name="submit" value="log in" class="btn btn-info btn-lg btn-block" />
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>



