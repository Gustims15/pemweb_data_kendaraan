<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $setting = App\Setting::where('slug', 'nama-toko')->first();
      $description = $setting ? $setting->description : 'Default Title';
    ?>
    <title>{{ $description }} | About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('depan.home') }}">{{ $description }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('depan.home') }}" class="nav-link">Beranda</a></li>
          <li class="nav-item active"><a href="{{ route('depan.about') }}" class="nav-link">Tentang</a></li>
          <li class="nav-item"><a href="{{ route('depan.services') }}" class="nav-link">Jasa</a></li>
          <li class="nav-item"><a href="{{ route('depan.contact') }}" class="nav-link">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('depan') }}/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
          <div class="text w-100 text-center mb-md-5 pb-md-5">
            <h1 class="mb-4">{{ $description }}</h1>
            <?php
              $banner = App\Setting::where('name', 'Banner')->first();
              $bannerDescription = $banner ? $banner->description : 'gusti';
            ?>
            <p style="font-size: 18px;">SIPIL CAR</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add the rest of your content here -->

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo"></a> <span>{{ $description }}</span></h2>
            <p>{{ $bannerDescription }}</p>
          
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Tangerang, Kec. Panongan, Citra</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">082111565144</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Sardanagusti501@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
  </div>

  <script src="{{ asset('depan') }}/js/jquery.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('depan') }}/js/popper.min.js"></script>
  <script src="{{ asset('depan') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('depan') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('depan') }}/js/aos.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('depan') }}/js/bootstrap-datepicker.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.timepicker.min.js"></script>
  <script src="{{ asset('depan') }}/js/scrollax.min.js"></script>
  <script src="{{ asset('depan') }}/js/google-map.js"></script>
  <script src="{{ asset('depan') }}/js/main.js"></script>
  </body>
</html>
