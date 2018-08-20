<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/css/skins/skin-red.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
$login = $this->session->userdata('login_id');
if($login){

    redirect('dashboard');
}

?>

<?php
$erro = $this->session->flashdata('erro');

if($erro){
?>
<script type="text/javascript">
    alert(<?php echo $erro; ?>);
</script>
<?php
}
?>


<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Movie</b>Rentals</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?php echo base_url('register/registrar'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" id="vendedor" name="vendedor" class="form-control" placeholder="Vendedor">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-flat">Registrar Vendedor</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="<?php echo base_url('login'); ?>" class="text-center">Entrar na conta</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>