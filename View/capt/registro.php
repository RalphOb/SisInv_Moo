<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['capturista']))
{
  header("Location: ../../index.php");
}
if(isset($_SESSION['administrador']))
{
  header("Location: ../../View/admin/index_admin.php");
}
if(isset($_SESSION['capturista']))

  $usuario = $_SESSION['capturista'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina principal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloade flex-column justify-content-center align-items-center">
    <i class="fas fa-info fa-2x animation__shake"></i>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <span class="brand-text font-weight-light"><i class="fas fa-train"></i> SISINV 0.1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ($usuario);?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index_user.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Principal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="registro.html" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Registrar Producto
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../log_out.php" class="nav-link">
              <i class="nav-icon fas fa-user-slash"></i>
              <p>
                Cerrar sesión

              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">INVENTARIO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registro de producto</h3>
              </div>
              <!-- /.card-header -->
              <form method="post" action="../../Controller/Facade/Facade.php">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label >Nombre</label>
                      <input type="" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                      <label >Categoria</label>
                      <select class="form-control select2" style="width: 100% " name="categoria" required>
                        <option selected="selected" value="" disabled>-- Selecione Categoría --</option>
                        <option value="1">Accesorios de Dispensarios</option>
                        <option value="2">Equipo de Monitoreo de Tanques y Control de Inventarios</option>
                        <option value="3">Monitoreo</option>
                        <option value="4">Sistema de Control Administrativo</option>
                        <option value="5">Varios</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label >No.Serie</label>
                      <input type="" class="form-control" name="no_serie" >
                    </div>
                    <div class="form-group">
                      <label >Cantidad</label>
                      <input type="number" class="form-control" name="cantidad" >
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label >Fecha</label>
                      <input type="date" class="form-control" name="fecha" >
                    </div>

                    <div class="form-group">
                      <label >Medida</label>
                      <input type="" class="form-control" name="medida"  >
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label >Modelo</label>
                      <input type="" class="form-control" name="modelo"  >
                    </div>
                    <div class="form-group">
                      <label >Marca</label>
                      <input type="" class="form-control" name="marca" >
                    </div>
                    <div class="form-group">
                      <label >Origen</label>
                        <select class="form-control select2" style="width: 100% " name="origen" required>
                            <option selected="selected" value="" disabled>-- Selecione origen --</option>
                            <option value="Nacional">Nacional</option>
                            <option value="Internacional">Internacional</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label >Ubicacion</label>
                        <select class="form-control select2" style="width: 100% " name="ubicacion" required>
                            <option selected="selected" value="" disabled>-- Selecione ubicación --</option>
                            <option value="Almacen">Almacen</option>
                            <option value="Bodega">Bodega</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label >Estado del producto</label>
                      <select class="form-control select2" style="width: 100% " name="estado_producto" required>
                        <option selected="selected" value="" disabled>-- Selecione condición --</option>
                        <option value="Nuevo">Nuevo</option>
                        <option value="Usado">Usado</option>
                        <option value="Reparado">Reparado</option>
                        <option value="Irreparable">Irreparable</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label >Color</label>
                      <input type="" class="form-control" name="color" >
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>

                <!-- /.row -->
              </div>
                <div class="modal-footer justify-content-between">
<!--                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <b>SisInv </b>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
