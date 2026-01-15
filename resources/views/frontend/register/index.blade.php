<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register | Public Complaints</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" />
    <meta name="author" />
    <link rel="shortcut icon" href="{{asset('assets/images/Logo.svg')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .language-switcher {
            position: relative;
            display: inline-block;
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
        .language-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body style="background-color: #43a7f9">
    <!-- Language Switcher -->
    <div class="language-container">
        <div class="language-switcher">
            <button class="language-btn" id="currentLanguage">
                <i class="mdi mdi-earth"></i> ID
            </button>
            <div class="language-options">
                <div class="language-option" data-lang="id">Indonesia (ID)</div>
                <div class="language-option" data-lang="en">English (EN)</div>
            </div>
        </div>
    </div>

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary" data-translate="register.title">Register !</h5>
                                        <p data-translate="register.subtitle">Register to proceed to the Public Complaints application.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div class="auth-logo">
                                <a href="#" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{asset('assets/images/Logo.svg')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="#" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{asset('assets/images/Logo.svg')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="p-2">
                                <form class="form-horizontal" action="{{url('user/register/save')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nik" class="form-label" data-translate="register.nik">NIK</label>
                                        <input type="number" class="form-control" name="nik" id="nik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label" data-translate="register.name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label" data-translate="register.username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label" data-translate="register.email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label" data-translate="register.phone">Phone Number</label>
                                        <input type="number" class="form-control" name="phone_number" id="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label" data-translate="register.address">Address</label>
                                        <textarea class="form-control" id="address" name="address"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="photo" class="form-label" data-translate="register.photo">Photo</label>
                                        <input type="file" class="form-control" name="photo" id="photo">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password" data-translate="register.password">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" autocomplete="current-password">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" data-translate="register.button">Register</button>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <a href="{{ url('/') }}" class="btn btn-secondary waves-effect waves-light" data-translate="register.back">
                                            <i class="mdi mdi-arrow-left"></i> Back
                                        </a>
                                    </div>

                                    <div class="mt-4 text-center">
                                      <!--   <p class="mb-0" data-translate="register.terms">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                        <br> -->
                                        <p data-translate="register.have_account">Already have an account ?</p> <p><a href="{{url('user/login')}}" class="fw-medium text-primary" data-translate="register.login_link"> Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            <p>© <script>document.write(new Date().getFullYear())</script> <span data-translate="footer.crafted">Crafted with</span> <i class="mdi mdi-heart text-danger"></i> <span data-translate="footer.by">by Wildan Fauzan | 23552011434</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <!-- Translation Script -->
    <script>
        // Data terjemahan
        const translations = {
            id: {
                // Register page
                "register.title": "Daftar !",
                "register.subtitle": "Daftar untuk melanjutkan ke aplikasi Pengaduan Masyarakat.",
                "register.nik": "NIK",
                "register.name": "Nama",
                "register.username": "Username",
                "register.email": "Email",
                "register.phone": "Nomor Telepon",
                "register.address": "Alamat",
                "register.photo": "Foto",
                "register.password": "Password",
                "register.button": "Daftar",
                "register.terms": "Dengan mendaftar Anda menyetujui Skote <a href='#' class='text-primary'>Syarat Penggunaan</a>",
                "register.have_account": "Sudah punya akun ?",
                "register.login_link": "Masuk",
                "register.back": "Kembali",
                
                // Footer
                "footer.crafted": "Dibuat dengan",
                "footer.by": "oleh Wildan Fauzan | 23552011434",
            },
            en: {
                // Register page (default)
                "register.title": "Register !",
                "register.subtitle": "Register to proceed to the Public Complaints application.",
                "register.nik": "NIK",
                "register.name": "Name",
                "register.username": "Username",
                "register.email": "Email",
                "register.phone": "Phone Number",
                "register.address": "Address",
                "register.photo": "Photo",
                "register.password": "Password",
                "register.button": "Register",
                "register.terms": "By registering you agree to the Skote <a href='#' class='text-primary'>Terms of Use</a>",
                "register.have_account": "Already have an account ?",
                "register.login_link": "Login",
                "register.back": "Back",
                
                // Footer
                "footer.crafted": "Crafted with",
                "footer.by": "by Wildan Fauzan | 23552011434",
            }
        };

        // Fungsi untuk mengubah bahasa
        function changeLanguage(lang) {
            // Simpan preferensi bahasa di localStorage
            localStorage.setItem('preferredLanguage', lang);
            
            // Perbarui tombol bahasa
            document.getElementById('currentLanguage').innerHTML = `<i class="mdi mdi-earth"></i> ${lang.toUpperCase()}`;
            
            // Terapkan terjemahan ke semua elemen dengan atribut data-translate
            document.querySelectorAll('[data-translate]').forEach(element => {
                const key = element.getAttribute('data-translate');
                if (translations[lang][key]) {
                    if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                        element.placeholder = translations[lang][key];
                    } else {
                        element.innerHTML = translations[lang][key];
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
            
            // Auto-hide alerts
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 2000);
        });    
    </script>
</body>
</html>