
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url()?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url()?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>/assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
    
        <form method="post" action="<?=base_url('C_login/auth')?>">
          <div class="card" style="background-color: #1e1e2f;">
            <div class="card-header">
              <h4 class="card-title">Masuk</h4><br>
              <?= $this->session->userdata("notif_login");$this->session->unset_userdata("notif_login")?>
            </div>
            <div class="card-body" >
              <div class="form-group has-label">
                <label>Email Address *</label>
                <input class="form-control" name="email" type="text">
              </div>
              <div class="form-group has-label">
                <label>Password *</label>
                <input class="form-control" name="password" type="password">
              </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary">Masuk</button>
              <a class="btn btn-primary" href="<?=base_url('C_login/daftar')?>">Daftar</a>
              <p>Lupa Password</p>
            </div>
          </div>
        </form>
      
</body>
<script src="<?= base_url()?>/assets/js/core/jquery.min.js"></script>
  <script src="<?= base_url()?>/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url()?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url()?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url()?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url()?>/assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url()?>/assets/demo/demo.js"></script>
</html>