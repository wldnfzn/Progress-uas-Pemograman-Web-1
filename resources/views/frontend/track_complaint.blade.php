<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title data-translate="track.title">Lacak Pengaduan - Lapor Pak</title>
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
        <i class="icofont-phone"></i> +62 857-9812-3370
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

      <h1 class="logo mr-auto"><a href="{{url('/')}}">LaporPak<span>.</span></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{url('/')}}" data-translate="nav.home">Home</a></li>
          <li><a href="{{url('/')}}#procedures" data-translate="nav.procedures">Procedures</a></li>
          <li class="active"><a href="{{url('track-complaint')}}" data-translate="nav.track">Track Complaint</a></li>
          @if(Session::get('nik') == NULL)
          <li><a href="{{url('user/login')}}" data-translate="nav.login">Login</a></li>
          <li><a href="{{url('user/register')}}" data-translate="nav.register">Register</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1 data-translate="track.hero_title">Lacak Status Pengaduan</h1>
      <h2 data-translate="track.hero_subtitle">Masukkan NIK Anda untuk melihat progres pengaduan</h2>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Search Section ======= -->
  <section id="search" class="search-section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow">
            <div class="card-body p-5">
              <h3 class="text-center mb-4" data-translate="track.search_title">Cari Pengaduan</h3>
              
              <form action="{{url('search-complaint')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nik" data-translate="track.nik_label">Nomor Induk Kependudukan (NIK)</label>
                  <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Anda" data-translate="track.nik_placeholder" required>
                  @if($errors->has('nik'))
                    <small class="text-danger">{{ $errors->first('nik') }}</small>
                  @endif
                </div>
                
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary btn-lg" data-translate="track.search_button">Cari Pengaduan</button>
                </div>
              </form>
              
              <div class="mt-4">
                <div class="alert alert-info">
                  <i class="icofont-info-circle"></i> 
                  <strong data-translate="track.info_title">Informasi:</strong> 
                  <span data-translate="track.info_text">Masukkan NIK yang Anda gunakan saat membuat pengaduan untuk melihat statusnya.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Search Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; <span data-translate="footer.copyright">Copyright</span> <strong><span>Wildan Fauzan | 23552011434</span></strong>. <span data-translate="footer.rights">All Rights Reserved</span>
      </div>
      <div class="credits">
        <span data-translate="footer.designed">Designed by</span> <a href="#">Wildan Fauzan</a>
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
        
        // Halaman lacak pengaduan
        "track.title": "Lacak Pengaduan - Layanan Pengaduan Masyarakat Online",
        "track.hero_title": "Lacak Status Pengaduan",
        "track.hero_subtitle": "Masukkan NIK Anda untuk melihat progres pengaduan",
        "track.search_title": "Cari Pengaduan",
        "track.nik_label": "Nomor Induk Kependudukan (NIK)",
        "track.nik_placeholder": "Masukkan NIK Anda",
        "track.search_button": "Cari Pengaduan",
        "track.info_title": "Informasi:",
        "track.info_text": "Masukkan NIK yang Anda gunakan saat membuat pengaduan untuk melihat statusnya.",
        
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
        
        // Track complaint page
        "track.title": "Track Complaint - Online Public Complaint Service",
        "track.hero_title": "Track Complaint Status",
        "track.hero_subtitle": "Enter your NIK to view complaint progress",
        "track.search_title": "Search Complaint",
        "track.nik_label": "Population Identification Number (NIK)",
        "track.nik_placeholder": "Enter your NIK",
        "track.search_button": "Search Complaint",
        "track.info_title": "Information:",
        "track.info_text": "Enter the NIK you used when making a complaint to view its status.",
        
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
      
      // Perbarui atribut lang pada tag html
      document.documentElement.lang = lang;
      
      // Terapkan terjemahan ke semua elemen dengan atribut data-translate
      document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang][key]) {
          if (element.hasAttribute('placeholder') || element.hasAttribute('title') || element.hasAttribute('alt')) {
            // Untuk atribut selain teks
            element.setAttribute('data-translate', key);
            element[element.hasAttribute('placeholder') ? 'placeholder' : 
                   element.hasAttribute('title') ? 'title' : 'alt'] = translations[lang][key];
          } else {
            // Untuk teks biasa
            element.textContent = translations[lang][key];
          }
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