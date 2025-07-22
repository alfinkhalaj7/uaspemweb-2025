<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KEHILANGAN - TemuBarang Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TemuBarang
  * Template URL: https://bootstrapmade.com/TemuBarang-bootstrap-TemuBarangtics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">TemuBarang</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Daftar Barang</a></li>
          <li><a href="{{ route('kehilangan.form') }}" class="{{ request()->routeIs('kehilangan.form') ? 'active' : '' }}">Kehilangan</a></li>
          <li><a href="{{ route('penemuan.form') }}" class="{{ request()->routeIs('penemuan.form') ? 'active' : '' }}">Penemuan</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/apa.png);">
      <div class="container position-relative">
        <h1>Kehilangan</h1>
        <p>Laporkan barang yang Anda hilangkan agar pengguna lain bisa membantu menemukannya kembali secara cepat dan mudah.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          </div>

          <div class="col-lg-8 mx-auto">
            <div class="card shadow p-4">
              <h4 class="mb-3 text-center">Formulir Laporan Kehilangan</h4>
              <form action="{{ route('kehilangan.submit') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                  <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                  <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" required>
                </div>
          
                <div class="mb-3">
                  <label for="jenis_barang" class="form-label">Jenis Barang</label>
                  <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" required>
                </div>
          
                <div class="mb-3">
                  <label for="lokasi" class="form-label">Lokasi Kehilangan</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                </div>
          
                <div class="mb-3">
                  <label for="ciri_ciri" class="form-label">Ciri-ciri Barang</label>
                  <textarea class="form-control" id="ciri_ciri" name="ciri_ciri" rows="4" required></textarea>
                </div>
          
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Laporkan Kehilangan</button>
                </div>
              </form>
            </div>
          </div>
          
          
            
            
          

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <span class="sitename">TemuBarang</span>
          </a>
          <p>TemuBarang adalah layanan online untuk membantu mahasiswa melaporkan dan menemukan kembali barang yang hilang atau ditemukan dengan cepat dan mudah.</p>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
        <div class="col-lg-2 col-6 footer-links">
          <h4>Navigasi</h4>
          <ul>
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
            <li><a href="{{ route('services') }}">Daftar Barang</a></li>
            <li><a href="{{ route('kehilangan.form') }}">Lapor Kehilangan</a></li>
            <li><a href="{{ route('penemuan.form') }}">Lapor Penemuan</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><a href="#">Pelaporan Barang Hilang</a></li>
            <li><a href="#">Pelaporan Penemuan</a></li>
            <li><a href="#">Data Laporan Terbaru</a></li>
            <li><a href="#">Validasi oleh Admin</a></li>
          </ul>
        </div>
  
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi Kami</h4>
          <p>Jl. Sistem Informasi No. 123</p>
          <p>Kota Teknologi, Indonesia</p>
          <p><strong>Telepon:</strong> <span>+62 812 3456 7890</span></p>
          <p><strong>Email:</strong> <span>support@temubarang.id</span></p>
        </div>
      </div>
    </div>
  
    <div class="container copyright text-center mt-4">
      <p>© <span>Hak Cipta</span> <strong class="px-1 sitename">TemuBarang</strong> <span>Seluruh Hak Dilindungi</span></p>
      <div class="credits">
        Dikembangkan oleh <a href="https://bootstrapmade.com/">BootstrapMade</a> & dimodifikasi untuk TemuBarang.
      </div>
    </div>
  
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>