<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $data->nama_yayasan }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ Storage::url( $data->logo ) }}" rel="icon">
  <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="front/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="front/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="front/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{ $data->email }}</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $data->telepon }}</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ Storage::url( $data->logo ) }}" alt="">

          <h4 class="sitename">{{ $data->nama_yayasan }}</h4>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">Profile</a></li>
            <li>
              <a href="/admin">
                <button type="button" class="btn btn-light">
                    Admin
                </button>
              </a>
            <li>
              <a href="{{ route('signIn')}}">
                <button type="button" class="btn btn-light">
                    Sign in
                </button>
              </a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">


    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>Sistem Administrasi </span><span class="accent">Santri & Santri wati</span></h2>
            <p>Sistem ini bertujuan untuk memudahkan Wali Santri Untuk Melakukan Administrasi kepada pihak Ponpes</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Jelajahi</a>
              <a href="{{ $data->link_satu }}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Sekarang</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="{{ Storage::url( $data->benner ) }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5 justify-content-center">

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-book-half"></i></div>
            <h4 class="title"><a href="" class="stretched-link">MTS</a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-globe-europe-africa"></i></div>
            <h4 class="title"><a href="" class="stretched-link">MA</a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-amd"></i></div>
            <h4 class="title"><a href="" class="stretched-link">SMK</a></h4>
          </div>
        </div><!--End Icon Box -->


          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Sejarah {{ $data->nama_yayasan }}</h3>
            <img src="{{ Storage::url( $data->thumbnail_satu ) }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>
                {{ $data->sejarah_yayasan}}
            </p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Menjadi sekolah yang unggul dalam menghasilkan lulusan yang cerdas, berakhlak mulia, kreatif, dan siap menghadapi tantangan global.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Menyediakan lingkungan belajar yang kondusif dan menyenangkan.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Mengembangkan potensi siswa secara optimal melalui kurikulum yang relevan dan pembelajaran yang aktif.</span></li>
              </ul>

              <div class="position-relative mt-4">
                <img src="{{ Storage::url( $data->thumbnail_dua ) }}" class="img-fluid rounded-4" alt="">
                <a href="{{ $data->link_satu }}" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <div class="container">
        <img src="{{ Storage::url( $data->thumbnail_tiga ) }}" alt="">
        <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <a href="{{ $data->link_dua }}" class="glightbox play-btn"></a>
              <h3>Tonton Sekarang</h3>
              <p>{{ $data->deskripsi_yayasan }}</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Lokasi</h2>
        <p>Ayo Bergabung Dengan Kami menjadi Bagian Keluarga besar Yayasas Darul Kamilin</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-5">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>{{$data->alamat}}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telephone</h3>
                  <p>{{$data->telepon}}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>{{$data->email}}</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-7">
            <div class="map-container" data-aos="fade-up" data-aos-delay="100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.158321360945!2d116.34041837359696!3d-8.676489938332653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb3c697928c83%3A0x12b512086dcf4940!2sPondok%20Pesantren%20Darul%20Kamilin!5e0!3m2!1sid!2sid!4v1736492713410!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div><!-- End Map Container -->

        </div>

      </div>


    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container copyright text-center mt-4">
    <p>© <span>Copyright {{ date('Y') }} © </span><strong class="px-1 sitename">{{$data->nama_yayasan}}</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front/assets/vendor/php-email-form/validate.js"></script>
  <script src="front/assets/vendor/aos/aos.js"></script>
  <script src="front/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="front/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="front/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="front/assets/js/main.js"></script>

</body>

</html>
