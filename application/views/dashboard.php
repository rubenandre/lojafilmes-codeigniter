<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/skin-red.min.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<?php
$login = $this->session->userdata('login');
if(!$login){

    redirect('login');
}
?>

<body class="hold-transition skin-red">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('dashboard'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>M</b>RT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Movie </b>Rentals</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <form action="<?php echo base_url('dashboard/logout'); ?>" method="post">
                <ul class="nav navbar-nav">
                    <li>
                        <a><button type="submit" style="background: transparent; border: none;"><i class="fa fa-power-off"></i></button></a>
                    </li>
                </ul>
            </form>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menus</li>
                <li class="treeview active">
                    <a href="<?php echo base_url('dashboard'); ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url('clientes'); ?>">
                        <i class="fa fa-users"></i> <span>Clientes</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url('filmes'); ?>">
                        <i class="fa fa-film"></i> <span>Filmes</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="sistema"><i class="fa fa-dashboard"></i> Sistema</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row" style="display: inline;">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo $numFilmes; ?></h3>

                            <p>Filmes Inseridos</p>
                        </div>
                        <div class="icon" style="padding-top: 15px;">
                            <i class="ion ion-ios-film"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row" style="display: inline;">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $numClientes; ?></h3>

                            <p>Clientes inseridos</p>
                        </div>
                        <div class="icon" style="padding-top: 15px;">
                            <i class="ion ion-ios-people"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row" style="display: inline;">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red" >
                        <div class="inner">
                            <h3><?php echo $numAlugados; ?></h3>

                            <p>Filmes alugados</p>
                        </div>
                        <div class="icon" style="padding-top: 15px;".>
                            <i class="ion-social-usd"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2018 <a href="https://github.com/rubenandre">Rúben Silva</a>.</strong> All rights
        reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
