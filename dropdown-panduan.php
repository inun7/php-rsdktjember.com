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

  <?php
  include_once("config.php");

  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "<script>alert('Login gagal! Username dan Password salah!');history.go(-1);</script>";
    }elseif ($_GET['pesan'] == "logout") {
      echo "<script>alert('Anda berhasil logout.')</script>";
    }elseif ($_GET['pesan'] == "belum_login") {
      echo "<script>alert('Anda harus login untuk mengakses halaman admin!')</script>";
    }
  }
   ?>

  <!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Admin Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form method="post" action="cekLogin.php" role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="username" id="username" placeholder="Masukan Username" type="text" style="color: black">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="password" id="password" placeholder="Masukan Password" type="password" style="color: black">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Login
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
<!-- end session -->


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
				<a class="navbar-brand" href="index.php" style="color:white;">
					RS DKT Jember
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="denah.php">Denah</a></li>
            <li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tentang </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="dropdown-kontak.php">Kontak</a>
								<a class="dropdown-item" href="dropdown-tentang.php">Tentang</a>
								<a class="dropdown-item active" href="dropdown-panduan.php">Panduan</a>
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Admin</span></a></li>
          </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

  <div id="contact" class="section wb">
      <div class="container">
        <center>
          <aside class="single_sidebar_widget author_widget">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Panduan</h3>
                    <p style="color: black;">
                      1. Beranda - Berisi Data Ruangan dan Infus Pasien <br>
                      2. Denah - Berisi Denah Rumah Sakit Baladhika Husada (DKT) Jember <br>
                      3. Kontak - Berisi detail Rumah Sakit Baladhika Husada (DKT) Jember <br>
                      4. Tentang - Berisi info visi, misi dan tujuan Pemerintah Kabupaten Jember <br>
                      5. Panduan - Berisi panduan penggunaan website untuk Masyarakat.
                    </p>
                </div>
            </div>
          </aside>
        </center>
      </div><!-- end container -->
  </div><!-- end section -->


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
                          <li><a href="index.php">Beranda</a></li>
                          <li><a href="denah.php">Denah</a></li>
                          <li><a href="kontak.php">Kontak</a></li>
                          <li><a href="tentang.php">Tentang</a></li>
                          <li><a href="panduan.php">Panduan</a></li>
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

</body>
</html>
