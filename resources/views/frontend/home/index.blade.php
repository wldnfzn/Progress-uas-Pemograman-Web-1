<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lapor Pak</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="{{asset('assets/images/Logo.svg')}}">

  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    <style>
    .search-section {
      padding: 60px 0;
      background: #f8f9fa;
    }
    .status-badge {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: bold;
    }
    .status-unprocess {
      background-color: #ffc107;
      color: #000;
    }
    .status-process {
      background-color: #17a2b8;
      color: #fff;
    }
    .status-finished {
      background-color: #28a745;
      color: #fff;
    }
    .complaint-card {
      transition: transform 0.3s;
    }
    .complaint-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .user-info {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    .user-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      object-fit: cover;
    }
    .user-details {
      flex: 1;
    }
    .user-name {
      font-weight: bold;
      margin-bottom: 2px;
    }
    .user-nik {
      font-size: 12px;
      color: #6c757d;
    }
    /* Language Switcher Styles */
    .language-switcher {
      position: relative;
      display: inline-block;
      margin-left: 15px;
    }
    .language-btn {
      background: #007bff;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 4px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .language-btn i {
      font-size: 16px;
    }
    .language-options {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 4px;
      overflow: hidden;
      right: 0;
    }
    .language-option {
      color: black;
      padding: 10px 15px;
      text-decoration: none;
      display: block;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .language-option:hover {
      background-color: #f1f1f1;
    }
    .language-switcher:hover .language-options {
      display: block;
    }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">wildanfauzan266@gmail.com</a>
        <i class="icofont-phone"></i> +62 85798123370
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
      <!-- Language Switcher -->
      <div class="language-switcher ms-3">
        <button class="language-btn" id="currentLanguage">
          <i class="icofont-globe"></i> ID
        </button>
        <div class="language-options">
          <div class="language-option" data-lang="id">Indonesia (ID)</div>
          <div class="language-option" data-lang="en">English (EN)</div>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">LaporPak<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}" data-translate="nav.home">Home</a></li>
          <li><a href="#procedures" data-translate="nav.procedures">Procedures</a></li>
          <li ><a href="{{url('track-complaint')}}" data-translate="nav.track">Track Complaint</a></li>
          @if(Session::get('nik') == NULL)
          <li><a href="{{url('user/login')}}" data-translate="nav.login">Login</a></li>
          <li><a href="{{url('user/register')}}" data-translate="nav.register">Register</a></li>
          <li><a href="{{url('admin/login')}}" style="color:#dc3545;font-weight:bold;"><i class="icofont-user-alt-3"></i> Admin</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span data-translate="hero.title">Satu Laporan, Sejuta Perubahan</span></h1>
      <h2 data-translate="hero.subtitle">Sampaikan keluhan, aspirasi, dan pengaduan masyarakat dengan mudah, cepat, dan transparan.
Bersama LaporPak, suara Anda didengar dan ditindaklanjuti</h2>
      @if(Session::get('nik') != NULL)
      <div class="d-flex">
        <a href="{{url('user/complaint/add')}}" class="btn-get-started scrollto" data-translate="hero.report_button">Report</a>
      </div>
      @endif
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="procedures" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="" data-translate="procedure.step1.title">1. Write a Report</a></h4>
              <p class="description" data-translate="procedure.step1.desc">Write your complaint report clearly.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="" data-translate="procedure.step2.title">2. Verification Process</a></h4>
              <p class="description" data-translate="procedure.step2.desc">Wait until your report is verified.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="" data-translate="procedure.step3.title">3. Follow up</a></h4>
              <p class="description" data-translate="procedure.step3.desc">Your report is being followed up.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="" data-translate="procedure.step4.title">4. Done</a></h4>
              <p class="description" data-translate="procedure.step4.desc">The complaint report has been prosecuted.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Wildan Fauzan | 23552011434</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Wildan Fauzan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  
  <!-- Translation Script -->
  <script>
    // Data terjemahan
    const translations = {
      id: {
        // Navigasi
        "nav.home": "Beranda",
        "nav.procedures": "Prosedur",
        "nav.track": "Lacak Pengaduan",
        "nav.login": "Masuk",
        "nav.register": "Daftar",
        
        // Hero section
        "hero.title": "Layanan Pengaduan Masyarakat Online",
        "hero.subtitle": "Laporkan masalah Anda di sini, kami akan memprosesnya dengan cepat.",
        "hero.report_button": "Lapor",
        
        // Procedures
        "procedure.step1.title": "1. Tulis Laporan",
        "procedure.step1.desc": "Tulis laporan pengaduan Anda dengan jelas.",
        "procedure.step2.title": "2. Proses Verifikasi",
        "procedure.step2.desc": "Tunggu hingga laporan Anda diverifikasi.",
        "procedure.step3.title": "3. Tindak Lanjut",
        "procedure.step3.desc": "Laporan Anda sedang ditindaklanjuti.",
        "procedure.step4.title": "4. Selesai",
        "procedure.step4.desc": "Laporan pengaduan telah ditindaklanjuti.",
        
        // Footer
        "footer.copyright": "Hak Cipta",
        "footer.rights": "Semua Hak Dilindungi",
        "footer.designed": "Dirancang oleh",
      },
      en: {
        // Navigasi (default)
        "nav.home": "Home",
        "nav.procedures": "Procedures",
        "nav.track": "Track Complaint",
        "nav.login": "Login",
        "nav.register": "Register",
        
        // Hero section
        "hero.title": "Online Public Complaint Service",
        "hero.subtitle": "Drop your problem report here, we'll process it quickly.",
        "hero.report_button": "Report",
        
        // Procedures
        "procedure.step1.title": "1. Write a Report",
        "procedure.step1.desc": "Write your complaint report clearly.",
        "procedure.step2.title": "2. Verification Process",
        "procedure.step2.desc": "Wait until your report is verified.",
        "procedure.step3.title": "3. Follow up",
        "procedure.step3.desc": "Your report is being followed up.",
        "procedure.step4.title": "4. Done",
        "procedure.step4.desc": "The complaint report has been prosecuted.",
        
        // Footer
        "footer.copyright": "Copyright",
        "footer.rights": "All Rights Reserved",
        "footer.designed": "Designed by",
      }
    };

    // Fungsi untuk mengubah bahasa
    function changeLanguage(lang) {
      // Simpan preferensi bahasa di localStorage
      localStorage.setItem('preferredLanguage', lang);
      
      // Perbarui tombol bahasa
      document.getElementById('currentLanguage').innerHTML = `<i class="icofont-globe"></i> ${lang.toUpperCase()}`;
      
      // Terapkan terjemahan ke semua elemen dengan atribut data-translate
      document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang][key]) {
          element.textContent = translations[lang][key];
        }
      });
    }

    // Event listener untuk tombol bahasa
    document.addEventListener('DOMContentLoaded', function() {
      // Cek preferensi bahasa yang disimpan
      const savedLanguage = localStorage.getItem('preferredLanguage') || 'id';
      
      // Terapkan bahasa yang dipilih
      changeLanguage(savedLanguage);
      
      // Tambahkan event listener untuk opsi bahasa
      document.querySelectorAll('.language-option').forEach(option => {
        option.addEventListener('click', function() {
          const lang = this.getAttribute('data-lang');
          changeLanguage(lang);
        });
      });
    });
  </script>
</body>
</html>