<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina principal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="View/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="View/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="View/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="View/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="View/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="View/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="View/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="View/plugins/summernote/summernote-bs4.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Label', 'Value'],
        ['', 80],
        ['', 55],
        ['', 68]
      ]);

      var options = {
        width: 400, height: 120,
        redFrom: 90, redTo: 100,
        yellowFrom:75, yellowTo: 90,
        minorTicks: 5
      };

      var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

      chart.draw(data, options);

      setInterval(function() {
        data.setValue(0, 1, 40 + Math.round(5 * Math.random()));
        chart.draw(data, options);
      }, 800);
      setInterval(function() {
        data.setValue(1, 1, 20 + Math.round(7 * Math.random()));
        chart.draw(data, options);
      }, 700);
      setInterval(function() {
        data.setValue(2, 1, 60 + Math.round(2 * Math.random()));
        chart.draw(data, options);
      }, 500);
    }
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloaders flex-column justify-content-center align-items-center">
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
          <img src="View/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index_admin.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Principal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adm_registro.html" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Registrar Producto
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_orden.php" class="nav-link">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p>
                Crear Orden
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../../Controller/cerrar_sesion.php" class="nav-link">
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
<!--              <li class="breadcrumb-item active">Dashboard v1</li>-->
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
                <h3 class="card-title">Inventario</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="align-content: center ">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                    <th>Identificador</th>
                    <th>nombre</th>
                    <th>categoria</th>
                    <th>no_serie</th>
                    <th>cantidad</th>

                  </tr>
                  </thead>
                  <tbody>
                  <?php

	             include('Controller/buscarController.php');
                 $producto = new Facade();
                $arr = $producto ->todos();

                  foreach($arr as $fila){
                  ?>

                  <tr>
                    <td><?PHP echo $fila[0];?></td>
                    <td><?PHP echo $fila[1];?></td>
                    <td><?PHP echo $fila[2];?></td>
                    <td><?PHP echo $fila[3];?></td>
                    <td><?PHP echo $fila[4];?></td>
                    <td><?PHP echo $fila[5];?></td>
                    <td><?PHP echo $fila[6];?></td>
                    <td><?PHP echo $fila[7];?></td>
                    <td><?PHP echo $fila[8];?></td>
                    <td><?PHP echo $fila[9];?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
<script src="View/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="View/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="View/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="View/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="View/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="View/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="View/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="View/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="View/plugins/moment/moment.min.js"></script>
<script src="View/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="View/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="View/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="View/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="View/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="View/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="View/dist/js/pages/dashboard.js"></script>
</body>
</html>
