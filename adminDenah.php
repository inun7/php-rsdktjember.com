<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';

$key = '';
$get_data = tampil('infus', $key);
 ?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>RS DKT Jember</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">


    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

  <!-- Start header -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="adminDashboard.php" style="color:white;">
          RS DKT Jember
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="adminDashboard.php">Beranda</a></li>
            <li class="nav-item active"><a class="nav-link" href="adminDenah.php">Denah</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tentang </a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="#">Kontak</a>
                <a class="dropdown-item" href="#">Tentang</a>
                <a class="dropdown-item" href="#">Panduan</a>
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log orange" href="index.php" data-target="#login"
                   onclick="return confirm('Keluar?')"><span>Logout</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->

  <!-- Logika Tampil dan Tambah Berita -->
  <div class="container text-center">
    <br>
      <h2>Denah RS Baladhika Husada (DKT) Jember</h2>
      <input type="button" value="Ganti Denah" class="btn btn-primary">
    <br> <br>
    <img src="images/denah_rs-dktjember.png" alt="">
    <br> <br>
  </div>
  <!-- end section -->


  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>Tentang Kami</h3>
                      </div>
                      <p> Website ini dibangun untuk membantu RS Bladhika Husada (DKT) Jember dalam monitoring infus pasien. </p>
          <div class="footer-right">
            <ul class="footer-links-soi">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul><!-- end links -->
          </div>
                  </div><!-- end clearfix -->
              </div><!-- end col -->

      <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>Daftar Link</h3>
                      </div>
                      <ul class="footer-links">
                          <li><a href="adminDashboard.php">Beranda</a></li>
                          <li><a href="adminDenah.php">Denah</a></li>
                          <li><a href="#">Kontak</a></li>
                          <li><a href="#">Tentang</a></li>
                          <li><a href="#">Panduan</a></li>
                      </ul><!-- end links -->
                  </div><!-- end clearfix -->
              </div><!-- end col -->

              <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>Kontak Kami</h3>
                      </div>

                      <ul class="footer-links">
                          <li><a href="mailto:#">rsbaladhikahusada@yahoo.co.id</a></li>
                          <li><a href="#">www.rs-dktjember.com</a></li>
                          <li>Jl. Panglima Besar Sudirman No. 49, Patrang, Jember, Jawa Timur 68118, Indonesia.</li>
                          <li>(0331) 484674</li>
                      </ul><!-- end links -->
                  </div><!-- end clearfix -->
              </div><!-- end col -->

          </div><!-- end row -->
      </div><!-- end container -->
  </footer><!-- end footer -->



  <div class="copyrights">
      <div class="container">
          <div class="footer-distributed">
              <div class="footer-center">
                  <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">www.rs-dktjember.com</a> Design By : <a href="bit.ly/inunBiography">Sulton Ainun Nazib</a></p>
              </div>
          </div>
      </div><!-- end container -->
  </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>
