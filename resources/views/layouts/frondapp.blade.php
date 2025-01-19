<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{ asset('images/s_icon.png') }}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        #csBox {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            z-index: 1000;
            font-family: Arial, sans-serif;
        }

        #csBox h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        #csNumbers {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #csNumbers li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e9ecef;
            margin: 8px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #csNumbers li:hover {
            background-color: #d6d8db;
        }

        #csNumbers li span {
            font-size: 14px;
            color: #333;
        }

        .whatsapp-button {
            display: inline-block;
            background-color: #25d366;
            color: white;
            padding: 5px 12px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .whatsapp-button:hover {
            background-color: #128c7e;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #333;
            cursor: pointer;
        }

        .close:hover {
            color: red;
        }

        .button-group {
            margin-top: 30px;
        }

        .social-media {
            margin-top: 10px;
        }

        .social-icon {
            margin-right: 10px;
            font-size: 20px;
            color: #333;
            text-decoration: none;
        }

        .social-icon:hover {
            color: #007bff;
            /* atau warna lain untuk efek hover */
        }

        .btn {
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #1e90ff;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1565c0;
        }

        .btn-outline-light {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: #1a374d;
        }

        @media (max-width: 991.98px) {
            .btn {
                width: 100%;
                text-align: center;
                margin-bottom: 15px;
            }

            .button-group {
                display: flex;
                flex-direction: column;
            }
        }

        .btn-login {
            padding: 10px 25px;
            /* Padding untuk tombol */
            font-size: 16px;
            /* Ukuran font */
            font-weight: bold;
            /* Bold */
            border: none;
            /* Tanpa border */
            border-radius: 30px;
            /* Sudut melengkung */
            color: #ffffff;
            /* Warna teks */
            background-color: #1e90ff;
            /* Latar belakang biru */
            transition: background-color 0.3s ease, transform 0.3s ease;
            /* Efek transisi */
            text-decoration: none;
            /* Tanpa garis bawah */
            display: inline-block;
            /* Membuat tombol tampil sebagai blok inline */
            margin-left: 20px;
            /* Margin kiri untuk memisahkan dari item sebelumnya */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Bayangan untuk kedalaman */
        }

        .btn-login:hover {
            background-color: #1c7ed6;
            /* Warna saat hover */
            transform: translateY(-2px);
            /* Efek mengangkat saat hover */
        }

        .btn-login:active {
            transform: translateY(0);
            /* Efek kembali saat ditekan */
        }

        .timbul {
            font-size: 60px;
            /* Ukuran font */
            font-weight: bold;
            /* Bold */
            color: #ffffff;
            /* Warna teks */
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.2),
                4px 4px 0px rgba(0, 0, 0, 0.2), 6px 6px 0px rgba(0, 0, 0, 0.2);
            /* Bayangan untuk efek timbul */
            transition: transform 0.3s ease;
            /* Efek transisi */
        }

        .timbul:hover {
            transform: translateY(-5px);
            /* Mengangkat tulisan saat hover */
        }

        .motivasi {
            font-size: 28px;
            /* Ukuran font */
            font-weight: bold;
            /* Bold */
            color: #ffffff;
            /* Warna teks putih */
            text-align: left;
            /* Ubah menjadi rata kiri */
            margin-bottom: 20px;
            /* Spasi bawah */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            /* Bayangan untuk meningkatkan kontras */
            padding-left: 20px;
            /* Tambahkan padding kiri jika perlu */
        }

        @media (max-width: 768px) {
            .motivasi {
                font-size: 24px;
                /* Ukuran font lebih kecil di perangkat kecil */
                padding-left: 15px;
                /* Sesuaikan padding kiri pada perangkat kecil */
            }
        }

        .description {
            font-size: 15px;
            /* Ukuran font */
            color: #ffffff;
            /* Warna teks putih */
            line-height: 1.5;
            /* Jarak antar baris */
            max-width: 800px;
            /* Maksimal lebar untuk menjaga teks tetap rapi */
            box-sizing: border-box;
            /* Pastikan padding dan margin tidak mempengaruhi lebar elemen */
        }

        .slides {
            position: relative;
            overflow: hidden;
            /* Mencegah gambar melampaui batas kontainer */
        }

        .slides img {
            position: absolute;
            width: 100%;
            /* Memastikan gambar memenuhi lebar kontainer */
            height: auto;
            /* Mempertahankan rasio aspek */
            opacity: 0;
            /* Mulai dengan gambar tidak terlihat */
            transition: opacity 1s ease-in-out;
            /* Transisi untuk efek fade */
        }

        .slides img.active {
            opacity: 1;
            /* Gambar aktif akan terlihat */
        }

        p-3 {
            padding: 1rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .widget {
            padding: 15px;
            background-color: #f8f9fa;
            /* Warna latar belakang yang lembut */
            border-radius: 5px;
            margin-bottom: 20px;
            /* Ruang antar widget */
        }

        .heading {
            color: #007bff;
            /* Warna judul */
            font-weight: bold;
            margin-bottom: 10px;
        }

        .links a {
            color: #333;
            /* Warna teks tautan */
            text-decoration: none;
            /* Menghilangkan garis bawah */
            transition: color 0.3s;
            /* Efek transisi halus */
        }

        .links a:hover {
            color: #007bff;
            /* Warna saat hover */
            text-decoration: underline;
            /* Garis bawah saat hover */
        }

        .footer-chat {
            position: fixed;
            /* Mengatur posisi tetap */
            bottom: 20px;
            /* Jarak dari bagian bawah */
            right: 20px;
            /* Jarak dari sisi kanan */
            z-index: 1000;
            /* Pastikan tombol terlihat di atas elemen lainnya */
        }

        .whatsapp-button {
            display: flex;
            align-items: center;
            /* Menyelaraskan ikon dan teks secara vertikal */
            background-color: #25D366;
            /* Warna latar belakang WhatsApp */
            color: white;
            /* Warna teks */
            padding: 10px 15px;
            /* Ruang di dalam tombol */
            border-radius: 5px;
            /* Sudut membulat */
            text-decoration: none;
            /* Menghilangkan garis bawah */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            /* Bayangan untuk efek 3D */
            transition: background-color 0.3s;
            /* Efek transisi untuk hover */
        }

        .whatsapp-button img {
            width: 20px;
            /* Ukuran ikon */
            height: 20px;
            /* Ukuran ikon */
            margin-right: 8px;
            /* Ruang antara ikon dan teks */
        }

        .whatsapp-button:hover {
            background-color: #128C7E;
            /* Warna saat hover */
        }

        /* Gaya untuk kotak CS */
        .cs-box {
            display: none;
            /* Sembunyikan kotak secara default */
            position: fixed;
            /* Posisi tetap */
            z-index: 1001;
            /* Pastikan kotak terlihat di atas konten lainnya */
            right: 20px;
            /* Jarak dari sisi kanan */
            bottom: 80px;
            /* Jarak dari bagian bawah */
            background-color: #fff;
            /* Latar belakang putih */
            border: 1px solid #888;
            /* Border */
            border-radius: 8px;
            /* Sudut membulat */
            padding: 20px;
            /* Ruang di dalam kotak */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            /* Bayangan untuk efek 3D */
            transition: all 0.3s ease;
            /* Transisi */
        }

        .cs-box.active {
            display: block;
            /* Tampilkan kotak jika aktif */
        }

        .cs-box {
            display: none;
            /* Hidden by default */
        }

        .to-top-btn {
            display: none;
            /* Hidden by default */
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            background-color: #007bff;
            /* Change as needed */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .to-top-btn:hover {
            background-color: #0056b3;
            /* Change as needed */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            /* Menunjukkan pointer saat hover */
        }

        .close:hover {
            color: black;
            /* Warna saat hover */
        }

        #csNumbers {
            list-style-type: none;
            /* Menghilangkan bullet points dari daftar */
            padding: 0;
            /* Menghilangkan padding */
        }

        #csNumbers li {
            margin: 10px 0;
            /* Jarak antar nomor */
        }

        .contact-button {
            display: inline-block;
            /* Mengatur tombol */
            background-color: #007BFF;
            /* Warna latar belakang tombol */
            color: white;
            /* Warna teks tombol */
            padding: 8px 12px;
            /* Ruang di dalam tombol */
            border-radius: 5px;
            /* Sudut membulat tombol */
            text-decoration: none;
            /* Menghilangkan garis bawah */
            margin-left: 10px;
            /* Jarak antara nomor dan tombol */
            transition: background-color 0.3s;
            /* Efek transisi untuk hover */
        }

        .contact-button:hover {
            background-color: #0056b3;
            /* Warna saat hover pada tombol */
        }

        .site-menu a {
            padding: 15px 20px;
            /* Increase padding for better click area */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transitions */
        }

        .site-menu a:hover {
            background-color: #ff6347;
            /* Background color on hover */
            color: white;
            /* Text color on hover */
        }

        .dropdown {
            position: absolute;
            /* Position dropdown correctly */
            display: none;
            /* Hide dropdown by default */
        }

        .has-children:hover .dropdown {
            display: block;
            /* Show dropdown on hover */
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .js-clone-nav {
                display: none;
                /* Hide menu on smaller screens */
            }

            .site-menu-toggle {
                display: block;
                /* Show burger icon */
            }

            .collapse.show {
                display: block !important;
                /* Ensure it displays when toggled */
            }
        }
    </style>

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.menu')

    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>

    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const slides = $(".slides img");
            const totalSlides = slides.length;

            function showSlide(index) {
                slides.removeClass("active").css("opacity", "0"); // Sembunyikan semua gambar
                slides.eq(index).addClass("active").css("opacity", "1"); // Tampilkan gambar yang aktif
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides; // Cek index berikutnya
                showSlide(currentIndex);
            }

            // Ganti slide setiap 3 detik
            setInterval(nextSlide, 3000);
        });
        $(function() {
            var slides = $(".slides"),
                images = slides.find("img");

            images.each(function(i) {
                $(this).attr("data-id", i + 1);
            });

            var typed = new Typed(".typed-words", {
                strings: [
                    "San Francisco.",
                    " Paris.",
                    " New Zealand.",
                    " Maui.",
                    " London.",
                ],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                preStringTyped: (arrayPos, self) => {
                    arrayPos++;
                    console.log(arrayPos);
                    $(".slides img").removeClass("active");
                    $('.slides img[data-id="' + arrayPos + '"]').addClass("active");
                },
            });
        });


        function toggleChat(event) {
            // Prevent the default link behavior if it's a link
            if (event) {
                event.preventDefault();
            }

            // Code to show or hide the customer service box
            var csBox = document.getElementById('csBox');
            csBox.classList.toggle('active');
        }

        // Close button functionality
        document.getElementById('closeBtn').addEventListener('click', function() {
            var csBox = document.getElementById('csBox');
            csBox.classList.remove('active'); // Ensure it gets hidden
        });

        // Optionally, attach the toggleChat function to a specific element
        document.getElementById('someToggleLink').addEventListener('click', toggleChat);

        
    </script>

    <script src="{{ asset('js/custom.js') }}"></script>


    <!-- Tambahkan font awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
