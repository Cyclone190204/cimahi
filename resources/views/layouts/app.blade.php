    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- BOOTSTRAP ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    </head>

    <body class="roboto-regular" style="background-image: url('assets/gambar/bg1.png'); background-size: cover; background-attachment: fixed;">
        <div class="biru">
            <div class="nav container py-2">
                <div class="nav-item ms-auto">
                    <small><a class="nav-link text-white d-flex align-items-center" href=<i class="bi bi-geo-alt me-1"></i> </a></small>
                </div>
            </div>
        </div>

        <nav class="navbar sticky-top navbar-expand-lg bg-white shadow-sm p-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('assets/gambar/logo.png') }}" alt="Logo Desa" width="100" height="75" class="me-2">
                    <span style="color: #F1BB6A; font-weight: bold;">DESA CIMAHI</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-4">
                            <a class="nav-link hover-active" href="/">BERANDA</a>
                        </li>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle hover-active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PROFIL DESA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profil') }}">PROFIL DESA Cimahi</a></li>
                                <li><a class="dropdown-item" href="{{ route('sejarah') }}">SEJARAH DESA Cimahi</a></li>
                                <li><a class="dropdown-item" href="{{ route('peta') }}">PETA DESA Cimahi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle hover-active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PEMERINTAHAN DESA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('visimisi') }}">VISI & MISI</a></li>
                                <li><a class="dropdown-item" href="{{ route('struktur') }}">STRUKTUR PEMERINTAHAN DESA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle hover-active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INFORMASI DESA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('berita') }}">BERITA / WISATA DESA</a></li>
                                <li><a class="dropdown-item" href="{{ route('gambar') }}">GALERI DESA</a></li>
                                <li><a class="dropdown-item" href="{{ route('produk.gambar') }}">PRODUK UNGGULAN DESA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle hover-active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LAYANAN MANDIRI
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('surat') }}">PENGAJUAN SURAT</a></li>
                                <li><a class="dropdown-item" href="{{ route('surat1') }}">SURAT KETERANGAN TIDAK MAMPU</a></li>
                                {{-- <li><a class="dropdown-item" href="{{ route('surat2') }}">SURAT KEMATIAN</a></li> --}}
                                <li><a class="dropdown-item" href="{{ route('surat3') }}">SURAT BEDA NAMA</a></li>
                                <li><a class="dropdown-item" href="{{ route('surat4') }}">SURAT BERITA ACARA/SURVEI</a></li>
                                <li><a class="dropdown-item" href="{{ route('surat5') }}">SURAT USAHA</a></li>
                                <li><a class="dropdown-item" href="{{ route('surat7') }}">SURAT PENGUBURAN</a></li>
                                <li><a class="dropdown-item" href="{{ route('surat8') }}">SURAT DOMISILI</a></li>
                                <li><a class="dropdown-item" href="{{ route('surat9') }}">SURAT KELAHIRAN</a></li>


                            </ul>   
                        </li>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle hover-active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LOGIN
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/admin">LOGIN SEBAGAI ADMIN</a></li>

                                @auth
                                @if (auth()->user()->hasRole('admin'))
                                <a class="nav-link" href="{{ route('filament.admin.pages.dashboard') }}">DASHBOARD</a>
                                @else
                                <button class="nav-link" onclick="document.querySelector('#btnLogout').click()">LOGOUT SEBAGAI USER</button>
                                @endif
        
                                <form class="d-none" action="{{ route('logout') }}" method="post">
                                    @csrf
                                    @method('DELETE')
        
                                    <button type="submit" id="btnLogout"></button>
                                </form>
                                @else
                                <a class="nav-link" href="{{ route('login') }}">LOGIN SEBAGAI USER</a>
                                @endauth
                            </ul> 
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link hover-active" href="{{ route('kontak') }}">KONTAK</a>
                            </li>
                            
                        </li>
                </div>
            </div>
        </nav>

        @yield('content')

                <footer class="text-white bg-dark pt-4">
    <div class="container">
        <div class="row">
            <!-- Kolom Tentang -->
            <div class="col-lg-4 mt-4">
                <b>TENTANG</b>
                <hr />
                <p>
                    Website resmi Desa Cimahi Kecamatan Cicantayan Kabupaten Sukabumi yang menyediakan informasi mengenai
                    pemerintahan, pelayanan, dan kegiatan masyarakat.
                </p>
            </div>

            <!-- Kolom Menu -->
            <div class="col-lg-4 mt-4">
                <b>MENU</b>
                <hr />
                <ul class="list-unstyled">
                    <li><a href="https://www.jabarprov.go.id/" class="text-white" target="_blank">Website Provinsi Jabar</a></li>
                    <li><a href="https://sukabumikab.go.id/" class="text-white" target="_blank">Pemerintah Kab. Sukabumi</a></li>
                    <li><a href="https://www.instagram.com/desa_sukamanis?igsh=MTdicWp0N3pudG0waw==" class="text-white" target="_blank">Instagram Desa Cimahi</a></li>
                    <li><a href="https://bpjs-kesehatan.go.id/#/" class="text-white" target="_blank">Daftar Kartu Indonesia Sehat</a></li>
                </ul>
            </div>

            <!-- Kolom Informasi -->
            <div class="col-lg-4 mt-4">
                <b>INFORMASI</b>
                <hr />
                <p>
                    <i class="bi bi-building-fill"></i>
                    JL. Cikukulu, Jl. Cicantayan No.171, Kabupaten Sukabumi, Jawa Barat 43155, Indonesia.
                </p>
                <p><i class="bi bi-telephone-fill"></i> 0858-6384-0858</p>
                <p><i class="bi bi-envelope"></i> desacimahi@gmail.com</p>
                <p>
                    <a href="https://www.google.com/maps/place/Sukamanis,+Kec.+Kadudampit,+Kabupaten+Sukabumi,+Jawa+Barat/@-6.8438805,106.8762566,13z" 
                       class="text-white" target="_blank">
                        <i class="bi bi-geo-alt-fill me-2"></i> Lokasi Desa Cimahi
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2025 Copyright:
        <a href="#" class="text-white">PKL UBSI 2025</a>
    </div>
</footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        @include('sweetalert::alert')
        <style type="text/css">
            .dropdown:hover>.dropdown-menu {
                display: block;
            }

            .nav-link,
            .dropdown-item {
                font-size: 14px;
                transition: color 0.3s ease-in-out;
            }

            .nav-link:hover {
                color: #303F9F;
            }

            .biru {
                background-color: #F1BB6A;
            }

            .hover-show {
                transition: transform .2s;
            }

            .hover-show:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .roboto-medium {
                font-family: "Roboto", sans-serif;
                font-weight: 500;
            }

            .roboto-regular {
                font-family: "Roboto", sans-serif;
                font-weight: 400;
            }

            footer .text-secondary {
                color: #757575;
            }

            footer .text-warning {
                text-decoration: none;
            }

            footer .text-warning:hover {
                text-decoration: underline;
            }
        </style>
    </body>

    </html>