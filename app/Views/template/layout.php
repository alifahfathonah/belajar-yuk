<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.0/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.0.5/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.4/dist/select2-bootstrap4.min.css">
    <!-- My Style Css -->
    <link rel="stylesheet" href="/css/all-style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Embed Style -->
    <?= $this->renderSection('style') ?>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.0/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.5/dist/js/adminlte.js"></script>
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/70351a3d8c.js" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <!-- Eruda -->
    <script src="https://cdn.jsdelivr.net/npm/eruda@2.4.1/eruda.js"></script>
    <script>eruda.init()</script>
    <!-- All Script -->
    <script src="/js/all-script.js"></script>
    <!-- Embed Script -->
    <?= $this->renderSection('script') ?>
  </body>
</html>