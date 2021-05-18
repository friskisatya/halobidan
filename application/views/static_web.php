<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url()?>/assets/img/favicon.png">
    <title>
        BidanKu
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/29747a5742.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="<?= base_url()?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url()?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url()?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<nav class="navbar navbar-expand-lg bg-danger d-block sticky-top">

<div class="container">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav float-right">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>#layanan">layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>#FAQ">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>#tentang">Tentang</a>
        </li>
      </ul>
      
    </div>
    <a href="<?=base_url()?>C_login/index_web" class="btn btn-info btn-round float-right">Daftar / Masuk</a>
  </div>
</nav>
    <!-- End Navbar -->
    <div class="content">
    <div>
        <?= $contents?>
    </div>
    <footer class="footer static-bottom">
      <div class="container-fluid">
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>,BidanKu
        </div>

         <!-- your footer here -->
      </div>
    </footer>
    </div>
</div>
    <!-- end navbar for mobile -->

    <!--   Core JS Files   -->
    <script src="<?= base_url()?>/assets/js/core/jquery.min.js"></script>
    <script src="<?= base_url()?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- Chart JS -->
    <script src="<?= base_url()?>/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url()?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url()?>/assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url()?>/assets/demo/demo.js"></script>

    <!-- <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
      type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
      type="text/javascript" charset="utf-8"></script>


    <script type="text/javascript">
          console.log("location");
          var platform = new H.service.Platform({
              "apikey": "ArIn2ITNg38oiRnzukfUFVab_IsEAS5a93VCE_nPkKk"
          });
          var geocoder = platform.getSearchService();
          if(navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(position => {
                  geocoder.reverseGeocode(
                      {
                          limit: 1,
                          at: position.coords.latitude + "," + position.coords.longitude
                      }, data => {
                          console.log(data)
                          $("#loc").append(
                            data.items[0].address.district+
                            ", "+data.items[0].address.city
                          );
                      }, error => {
                          console.error(error);
                      }
                  );
              });
          } else {
              console.error("Geolocation is not supported by this browser!");
          }
      </script> -->

    
</body>

</html>