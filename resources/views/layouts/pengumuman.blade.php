<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kecamatan Pemangkat</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/image/Sambas Logo compress 300x300.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            body {
                padding-top: 30px; 
            }
            .navbar {
                background-color: #286a59; 
            }
            .navbar .nav-link {
                color: #fff;
                transition: color 0.3s;
            }
            .navbar .nav-link:hover,
            .navbar .nav-link.active {
                color: #ffc107; 
            }
            #chatbotBtn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1030;
            }
        </style>
    </head>
    
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand ms-3 d-flex align-items-center" href="/">
                    <img src="{{ asset('image/Sambas Logo.png') }}" width="40" class="me-3" alt="Logo of Desa Parapakan">
                    <span class="logo-text d-flex flex-column">
                        <strong>Kecamatan Pemangkat</strong>
                        <small>Kabupaten Sambas</small>
                        <strong>Kecamatan Pemangkat</strong>
                        <small>Kabupaten Sambas</small>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('profile-desa') ? 'active' : '' }}" href="/profile-desa">PROFIL</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('perangkat-desa', 'lembaga-desa') ? 'active' : '' }}" href="#" id="pemerintahan-desa" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PEMERINTAHAN KECAMATAN
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/perangkat-desa">PERANGKAT KECAMATAN</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/lembaga-desa">LEMBAGA KECAMATAN</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('layanan-administrasi', 'daftar-pengumuman', 'daftar-kegiatan') ? 'active' : '' }}" href="#" id="informasi-publik" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INFORMASI PUBLIK
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/layanan-administrasi">LAYANAN ADMINISTRASI</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/daftar-pengumuman">PENGUMUMAN</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/daftar-kegiatan">KEGIATAN</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('layanan-publik') ? 'active' : '' }}" href="/layanan-publik">LAYANAN PUBLIK</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Floating Chatbot Button -->
    <a href="https://pemangkat-chatbot.streamlit.app/" target="_blank" id="chatbotBtn" class="btn btn-primary">
        <i class="fas fa-comments"></i>
    </a>

    <!-- Content -->
    <div class="container mt-5">
        @yield('child')
    </div>

    
    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Tentang</h5>
                    <p>
                        Pemangkat adalah sebuah kecamatan di Kabupaten Sambas, Kalimantan Barat, Indonesia.
                    </p>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Jelajahi</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="/profile-desa" class="text-white text-decoration-none">Profil Desa</a></li>
                        <li><a href="/layanan-publik" class="text-white text-decoration-none">Layanan Publik</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Hubungi Kami</h5>
                    <p>
                        <i class="fas fa-phone-alt me-2"></i>0812-3456-7890<br>
                        <i class="fas fa-envelope me-2"></i>pemangkat@example.com<br>
                        <i class="fas fa-map-marker-alt me-2"></i>Sambas, Kalimantan Barat
                    </p>
                    <div>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p class="mb-0">Copyright &copy; 2024 Kecamatan Pemangkat. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    @yield('kodejsenduser')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('mainNavbar');

            // Update the navbar class based on scroll position
            const updateNavbarTransparency = () => {
                if (window.scrollY === 0) {
                    navbar.classList.add('navbar-transparent');
                    navbar.classList.remove('navbar-solid');
                } else {
                    navbar.classList.add('navbar-solid');
                    navbar.classList.remove('navbar-transparent');
                }
            };

            // Initial check and attach scroll listener
            updateNavbarTransparency();
            window.addEventListener('scroll', updateNavbarTransparency);
        });

        // Fungsi untuk mengecek posisi elemen dan menambahkan kelas 'show'
        function checkPosition() {
            const containers = document.querySelectorAll('.transition-container');

            containers.forEach(container => {
                const containerPosition = container.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;

                if (containerPosition < screenPosition) {
                    container.classList.add('show');
                }
            });
        }

        document.addEventListener('scroll', checkPosition);
        window.onload = checkPosition;

        // untuk menjalankan counter
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".counter");

            counters.forEach(counter => {
                const updateCounter = () => {
                    const target = +counter.getAttribute("data-target");
                    const count = +counter.innerText;

                    const increment = target / 400;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCounter();
            });
        });
    </script>
</body>

</html>