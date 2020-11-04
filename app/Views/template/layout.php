<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <!-- My Style Css -->
    <link rel="stylesheet" href="/css/my-all-style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-collapse layout-navbar-fixed layout-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <?= $this->include('template/components/navbar') ?>
      
      <!-- Sidebar -->
      <?= $this->include('template/components/sidebar') ?>
      
      <!-- Content -->
      <?= $this->renderSection('content') ?>
      
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      
      <!-- Main Footer -->
      <footer class="main-footer bg-navy">
        <div class="d-flex justify-content-center">
          <p class="my-auto">
            Copyright &copy; <?= date('Y') ?>
            <a class="text-white" href="https://instagram.com/novaardiansyah._">Nova Ardiansyah</a>
          </p>
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="/adminlte/dist/js/demo.js"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/adminlte/plugins/raphael/raphael.min.js"></script>
    <script src="/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
    <!-- PAGE SCRIPTS -->
    <script src="/adminlte/dist/js/pages/dashboard2.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/70351a3d8c.js" crossorigin="anonymous"></script>
    <!-- Eruda -->
    <script src="https://cdn.jsdelivr.net/npm/eruda@2.4.1/eruda.js"></script>
    <script>eruda.init()</script>
  </body>
</html>