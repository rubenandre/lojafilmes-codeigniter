<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/css/skins/skin-red.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<body class="hold-transition skin-red sidebar-mini">
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
                <li class="treeview">
                    <a href="<?php echo base_url('clientes'); ?>">
                        <i class="fa fa-users"></i> <span>Clientes</span>
                    </a>
                </li>
                <li class="treeview active">
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
                <li><a href="<?php echo base_url('filmes'); ?>">Filmes</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Filmes</h3>
                </div>
                <div class="col-md-2" style="padding-bottom: 15px;">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Adicionar</button>
                </div>
                <br><br>
                <div class="box-body">
                    <table id="filmes" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Ano</th>
                            <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($query as $row): ?>
                            <tr>
                                <th width="4%"><?php echo $row->id_filme; ?></th>
                                <td width="25%"><?php echo $row->nome_filme; ?></td>
                                <td width="15%"><?php echo $row->ano_filme; ?></td>
                                <td width="4%">
                                    <form method="post" action="<?php echo base_url('filmes/editFilme'); ?>" style="display: inline;">
                                        <input type="hidden" name="id_filme" id="id_filme" value="<?php echo $row->id_filme; ?>">
                                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    </form>
                                    <form method="post" action="<?php echo base_url('filmes/deleteFilme'); ?>" style="display: inline;">
                                        <input type="hidden" name="id_filme" id="id_filme" value="<?php echo $row->id_filme; ?>">
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

<form method="post" action="<?php echo base_url('filmes/addFilme'); ?>">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Adicionar Filme</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-film" style="width: 15px;"></i></span>
                        <input type="text" id="nome_filme" name="nome_filme" class="form-control" placeholder="Nome do Filme">
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar" style="width: 15px;"></i></span>
                        <input type="number" min="0" id="ano_filme" name="ano_filme" class="form-control" placeholder="Ano do filme">
                    </div>
                    <br/>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Adicionar Filme</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('#filmes').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

</body>
