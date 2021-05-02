<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url()?>/assets/img/favicon.png">
    <title>
        Black Dashboard by Creative Tim
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
    <?php $segment = $this->uri->segment(1);?>
    <nav class="navbar fixed-top navbar-light" style="color:#fff;">
        <div class="mt-3 col-6 static-top mobile-dash float-left">
          <?php if($this->session->userdata('nama')==""){?>
            <h5><i class="fas fa-user mr-3"></i><a href="<?= base_url('C_login')?>" class="btn-sm btn-primary">Daftar/Masuk</a></h5>
          <?php } else {?>
            <h5><i class="fas fa-user mr-3"></i><?= $this->session->userdata("nama")?></h5>
          <?php }?>
        </div>
        <!-- <div class="mt-3 static-top mobile-dash float-right">
          <h5 id="loc"><i class='fas fa-map-marker-alt mr-1'></i></h5>
        </div> -->
    </nav>
    <div style="padding-top:70px;padding-bottom:100px;">
        <?= $contents?>
    </div>
    <nav class="navbar fixed-bottom navbar-light justify-content-center" style="color:#fff;">
      <div class="row">
        <a class="btn btn-<?= $segment == "C_index"?"success":"primary" ?> btn-sm col-3" href="<?=base_url("C_index")?>">
          <i class="fas fa-home"></i></i> <span class="reactive-mobile"><sub>Beranda</sub></span>
        </a>
        <a class="btn btn-<?= $segment == "C_profile_kehamilan"?"success":"primary" ?> btn-sm col-3" href="<?=base_url("C_profile_kehamilan")?>">
          <i class="fas fa-diagnoses"></i></i> <span class="reactive-mobile"><sub>Profile Kehamilan</sub></span>
        </a>
        <!-- <button class="btn btn-primary btn-sm col-2">
          <i class="fas fa-stethoscope"></i></i> <span class="reactive-mobile"><sub>Layanan Kesehatan</sub></span>
        </button> -->
        <!-- <button class="btn btn-primary btn-sm col-2">
          <i class="fas fa-question"></i></i> <span class="reactive-mobile"><sub>FAQ</sub></span>
        </button> -->
        <a class="btn btn-<?= $segment == "C_tentang"?"success":"primary" ?> btn-sm col-3" href="<?=base_url("C_tentang")?>">
          <i class="fas fa-info"></i></i> <span class="reactive-mobile"><sub>Tentang</sub></span>
        </a>
      </div>
    </nav>
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