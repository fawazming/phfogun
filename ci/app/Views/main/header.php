
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
  <meta property="og:title" content="Pure Heart Islamic Foundation Ogun State">
  <meta property="og:description" content="Empowering Muslim, nurturing youth, and celebrating positive change in Ogun State. Join our trusted community for a brighter future.">
  <meta property="og:image" content="https://phfogun.org.ng/assets/img/phf_logo.png">
  <meta property="og:url" content="https://phfogun.org.ng">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">

  <script type="application/ld+json">
    {
        <?=$jsonld?>
    }
    </script>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0&appId=564152621701541" nonce="MPSXRrkb"></script>
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
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('home')?>#aboutPHF">About PHF Ogun</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('excos')?>">The Executives</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Programmes</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('imf')?>">I M F</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('ampal')?>">AMPAL</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('pass')?>">PASS</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('phfquiz')?>">Monthly Quiz</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('girlsday')?>">Intl Girls Day</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?=base_url('teachersday')?>">Teacher's Day</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://camp.phfogun.org.ng">PMC</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('ourblog')?>">Our Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('donate')?>">Donate</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('gallery')?>">Gallery</a></li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                <a href="mailto:phfogunweb@gmail.com">phfogunweb@gmail.com</a><br /><br />
                <nav class="nav social social-white mt-4">
                  <a href="https://twitter.com/ogunphf" target="_blank"><i class="uil uil-twitter"></i></a>
                  <a href="https://facebook.com/phfogun.org" target="_blank"><i class="uil uil-facebook-f"></i></a>
                  <a href="https://www.instagram.com/phf_ogun/" target="_blank"><i class="uil uil-instagram"></i></a>
                  <a href="https://chat.whatsapp.com/1J1CSrbQRFgFU7zRl6DhD1" target="_blank"><i class="uil uil-whatsapp"></i></a>
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
              <li class="nav-item d-none d-md-block"><a href="https://twitter.com/ogunphf" target="_blank"><i class="uil uil-twitter"></i></a></li>
              <li class="nav-item d-none d-md-block"><a href="https://facebook.com/phfogun.org" target="_blank"><i class="uil uil-facebook-f"></i></a></li>
              <li class="nav-item d-none d-md-block"><a href="https://instagram.com/phf_ogun" target="_blank"><i class="uil uil-instagram"></i></a></li>
              <li class="nav-item d-none d-md-block"><a href="https://chat.whatsapp.com/1J1CSrbQRFgFU7zRl6DhD1" target="_blank"><i class="uil uil-whatsapp"></i></a></li>
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
