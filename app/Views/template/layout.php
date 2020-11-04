<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?= $title ?></title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/argon-dashboard/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/argon-dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/argon-dashboard/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <?= $this->include('template/components/sidenav') ?>
  <?= $this->include('template/components/topnav') ?>
  <?= $this->renderSection('content') ?>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/argon-dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/argon-dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/argon-dashboard/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="/argon-dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/argon-dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/argon-dashboard/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/argon-dashboard/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/argon-dashboard/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>