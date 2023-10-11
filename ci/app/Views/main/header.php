
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=$desc?>">
  <meta name="keywords" content="">
  <meta name="author" content="RayyanTech">
  <title><?=$title?></title>
  <link rel="shortcut icon" href="<?=base_url('assets/img/faviconn.png')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/plugins.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/navy.css')?>">
  <script type="application/ld+json">
    {
        <?=$jsonld?>
    }
    </script>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper my-0">
      <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img src="<?=base_url('assets/img/phf_logo.png')?>" alt="" width="150px" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <a href="./index.html"><img src="<?=base_url('assets/img/phf_logo.png' )?>" width="100px" alt="" /></a>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?=base_url('home')?>">Home</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('about')?>">About MSSN Remo</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('excos')?>">MSSN Remo Excos</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Programmes</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('usrah')?>">Weekly Usrah</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Monthly Ummahat</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">MSSN Week</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('alqudwa')?>">Al-Qudwa</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('donate')?>">Donate</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="<?=base_url('shop')?>">Shop</a></li> -->
              </ul>
              <!-- /.navbar-nav -->
              <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                <a href="mailto:mssnremoareacouncil@gmail.com">mssnremoareacouncil@gmail.com</a><br /> +234 903 1306 022<br />
                <nav class="nav social social-white mt-4">
                  <a href="https://twitter.com/mssnremo" target="_blank"><i class="uil uil-twitter"></i></a>
                  <a href="https://facebook.com/mssnremo" target="_blank"><i class="uil uil-facebook-f"></i></a>
                  <a href="https://instagram.com/mssnremo" target="_blank"><i class="uil uil-instagram"></i></a>
                  <a href="https://wa.me/2349031306022" target="_blank"><i class="uil uil-whatsapp"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!-- /offcanvas-nav-other -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block"><a href="https://twitter.com/mssnremo" target="_blank"><i class="uil uil-twitter"></i></a></li>
              <li class="nav-item d-none d-md-block"><a href="https://facebook.com/mssnremo" target="_blank"><i class="uil uil-facebook-f"></i></a></li>
              <li class="nav-item d-none d-md-block"><a href="https://instagram.com/mssnremo" target="_blank"><i class="uil uil-instagram"></i></a></li>
              <li class="nav-item d-none d-md-block"><a href="https://wa.me/2349031306022" target="_blank"><i class="uil uil-whatsapp"></i></a></li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
