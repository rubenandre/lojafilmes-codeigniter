<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/css/skins/skin-red.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('sistema'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>M</b>RT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Movie </b>Rentals</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="#push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section id="push-menu" class="sidebar">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menus</li>
                <li class="treeview">
                    <a href="<?php echo base_url('#'); ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview active">
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
                &nbsp
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('clientes'); ?>">Clientes</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Filmes alugados pelo cliente</h3>
                </div>
                <form method="post" action="<?php echo base_url('clientes'); ?>">
                    <div class="col-md-2" style="padding-bottom: 15px;">
                        <button class="btn btn-warning"><i class="fa fa-arrow-left"></i> Voltar</button>
                    </div>
                </form>
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data de Aluguer</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach($filmeCliente as $row): ?>
                            <tr>
                                <?php
                                    $nome = array(
                                        'filme' => $obterNome->getFilmeById($row->filmes_id_filme)
                                    );
                                ?>

                                <td width="15%"><?php echo $nome['filme'][0]->nome_filme; ?></td>
                                <td width="15%"><?php echo $row->data; ?></td>
                                <td width="1%">
                                    <form method="post" action="<?php echo base_url('clientes/deleteFilmeCliente'); ?>" style="display: inline;">
                                        <input type="hidden" name="iddata_aluguer" id="iddata_aluguer" value="<?php echo $row->iddata_aluguer; ?>">
                                        <button class="btn btn-success"><i class="fa fa-check"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
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

