<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ujian Online</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/css.css">

</head>

<body style="background-image:url(image/123.jpg); background-size:cover; background-attachment: fixed;">
    <div class="login-box">
        <div class="login-box-body">

            <div class="login-logo">
                <img src="image/al_anhar.jpg" alt="" width="35%"><br>
                <a href="#"><b>Ujian</b> Online</a>
            </div><!-- /.login-logo -->
           

            <form action="<?php echo base_url('auth') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block">Masuk</button>
                    </div><!-- /.col -->
                </div>
            </form>
            <br><br>

            <?= $this->session->flashdata('message'); ?>

            <div align="center">
               
                <strong>Copyright &copy; 2020</strong>
            </div>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>

    <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
    </script>
</body>

</html>