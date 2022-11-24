<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="home">Koto Tangah</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('home') ? 'active' : '' }}" href="home">Home</a></li>
          <li class="dropdown"><a href="#"><span>Kelola Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="penduduk-front">Penduduk</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="kematian-front">Kematian</a></li>
              <li><a href="kelahiran-front">Kelahiran</a></li>
              <li><a href="kelurahan-front">Kelurahan</a></li>
              <li><a href="kartukeluarga-front">Kartu Keluarga</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang</h1>
          <h2>Di Website Kecamatan Kota Tangah</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="home" class="btn-get-started scrollto">LETS GO!</a>
            <a href="https://youtu.be/5o6s-MrUgnM" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Dokumenter</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
