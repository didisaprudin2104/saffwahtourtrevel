<!-- resources/views/contact.blade.php -->
@extends('layouts.frondapp') <!-- Extend the layout -->

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="intro-wrap">
                        <h2 class="mb-5 motivasi">
                            <span class="d-block">SOLUSI MUDAH MENUJU BAITULLAH</span>
                            <p class="description">
                                Perjalanan Lancar Ibadah Nyaman
                            </p>
                        </h2>

                        <div class="button-group mt-4">
                            <a href="#paket" class="btn btn-primary me-3">Lihat Paket</a>
                            <a href="https://wa.me/6281398547779?text=Halo, saya ingin konsultasi umroh."
                                class="btn btn-primary me-3" target="_blank">
                                Konsultasi Umroh
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="slides">
                        <img src="{{ asset('images/umroh.png') }}" alt="Image" class="img-fluid active" />
                        <img src="{{ asset('images/kaca1.png') }}" alt="Image" class="img-fluid" />
                        <img src="{{ asset('images/flayer.png') }}" alt="Image" class="img-fluid" />
                        <img src="{{ asset('images/umroh2.png') }}" alt="Image" class="img-fluid" />
                        <img src="{{ asset('images/kaca2.png') }}" alt="Image" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <figure class="img-play-video position-relative">
                        <a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU"
                            data-fancybox>
                            <span></span>
                        </a>
                        <img src="{{ asset('images/slider-2.jpg') }}" alt="Saffwah Tour Travel"
                            class="img-fluid rounded-20" />
                    </figure>
                </div>

                <div class="col-lg-5">
                    <h2 class="section-title text-left mb-4">
                        Tentang SaffwahTourTravel
                    </h2>
                    <p>
                        SaffwahTourTravel adalah penyelenggara perjalanan Ibadah Umrah
                        yang telah berdiri sejak 2022. Dengan komitmen untuk memberikan
                        pengalaman perjalanan yang tak terlupakan, kami menyediakan
                        layanan yang dirancang khusus untuk memenuhi kebutuhan ibadah
                        Anda.
                    </p>

                    <p class="mb-4">
                        Kami terdaftar secara resmi di Kementerian Agama RI, menawarkan
                        berbagai pilihan paket umrah dan layanan perjalanan lainnya. Dari
                        transportasi hingga akomodasi, setiap detail dirancang untuk
                        memastikan kenyamanan dan kepuasan Anda.
                    </p>

                    <ul class="list-unstyled two-col clearfix">
                        <li>✅ Paket Umrah</li>
                        <li>✅ Transportasi Bandara</li>
                        <li>✅ Akomodasi Hotel</li>
                        <li>✅ Pemandu Berpengalaman</li>
                        <li>✅ Layanan Konsultasi</li>
                        <li>✅ Asuransi Perjalanan</li>
                        <li>✅ Tur Wisata Sejarah</li>
                        <li>✅ Layanan 24 Jam</li>
                    </ul>

                    <p>
                        <a href="#" class="btn btn-primary mt-3">Mulai Perjalanan Anda</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section bg-light py-5">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-lg-6 text-left">
                    <h2 class="section-title mb-3">Paket Umrah Keberangkatan Terdekat</h2>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="{{ route('layanan') }}" class="btn btn-primary">Lihat Paket Lainnya</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="media-1 border rounded shadow-sm overflow-hidden">
                        <a href="#" class="d-block mb-3">
                            <img src="{{ asset('images/hero-slider-1.jpg') }}" alt="Rialto Mountains" class="img-fluid card-image" />
                        </a>
                        <div class="d-flex align-items-center p-3">
                            <div>
                                <h3 class="h5"><a href="#">Paket Umroh Reguler</a></h3>
                                <div class="price ml-auto"><span>$520.00</span></div>
                            </div>
                        </div>
                        <p class="p-3">
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>10 November 2024, 02 Desember 2024, 09 Januari 2025 (+11 Tanggal Lainnya)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-hotel mr-2"></i>
                                <span>Le Meridien Tower / Emaar Grand / setaraf (Makkah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-building mr-2"></i>
                                <span>Dar Al Naeem Hotel (Madinah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane mr-2"></i>
                                <span>Garuda Indonesia, Oman Air, Qatar Airways / Oman Air</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane-departure mr-2"></i>
                                <span>Soekarno-Hatta International Airport (CGK)</span>
                            </span>
                        </p>
                        <div class="p-3 text-center">
                            <a href="{{ route('layanan.detail') }}" class="btn btn-primary">Detail Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="media-1 border rounded shadow-sm overflow-hidden">
                        <a href="#" class="d-block mb-3">
                            <img src="{{ asset('images/hero-slider-1.jpg')}}" alt="Rialto Mountains" class="img-fluid card-image" />
                        </a>
                        <div class="d-flex align-items-center p-3">
                            <div>
                                <h3 class="h5"><a href="#">Paket Umroh Reguler</a></h3>
                                <div class="price ml-auto"><span>$520.00</span></div>
                            </div>
                        </div>
                        <p class="p-3">
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>10 November 2024, 02 Desember 2024, 09 Januari 2025 (+11 Tanggal Lainnya)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-hotel mr-2"></i>
                                <span>Le Meridien Tower / Emaar Grand / setaraf (Makkah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-building mr-2"></i>
                                <span>Dar Al Naeem Hotel (Madinah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane mr-2"></i>
                                <span>Garuda Indonesia, Oman Air, Qatar Airways / Oman Air</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane-departure mr-2"></i>
                                <span>Soekarno-Hatta International Airport (CGK)</span>
                            </span>
                        </p>
                        <div class="p-3 text-center">
                            <a href="{{ route('layanan.detail') }}" class="btn btn-primary">Detail Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="media-1 border rounded shadow-sm overflow-hidden">
                        <a href="#" class="d-block mb-3">
                            <img src="{{ asset('images/hero-slider-1.jpg') }}" alt="Rialto Mountains" class="img-fluid card-image" src="images/hero-slider-1.jpg" alt="Rialto Mountains" class="img-fluid card-image" />
                        </a>
                        <div class="d-flex align-items-center p-3">
                            <div>
                                <h3 class="h5"><a href="#">Paket Umroh Reguler</a></h3>
                                <div class="price ml-auto"><span>$520.00</span></div>
                            </div>
                        </div>
                        <p class="p-3">
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>10 November 2024, 02 Desember 2024, 09 Januari 2025 (+11 Tanggal Lainnya)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-hotel mr-2"></i>
                                <span>Le Meridien Tower / Emaar Grand / setaraf (Makkah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-building mr-2"></i>
                                <span>Dar Al Naeem Hotel (Madinah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane mr-2"></i>
                                <span>Garuda Indonesia, Oman Air, Qatar Airways / Oman Air</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane-departure mr-2"></i>
                                <span>Soekarno-Hatta International Airport (CGK)</span>
                            </span>
                        </p>
                        <div class="p-3 text-center">
                            <a href="#" class="btn btn-primary">Detail Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="media-1 border rounded shadow-sm overflow-hidden">
                        <a href="#" class="d-block mb-3">
                            <img src="{{ asset('images/hero-slider-1.jpg') }}" alt="Rialto Mountains" class="img-fluid card-image" src="images/hero-slider-1.jpg" alt="Rialto Mountains" class="img-fluid card-image" />
                        </a>
                        <div class="d-flex align-items-center p-3">
                            <div>
                                <h3 class="h5"><a href="#">Paket Umroh Reguler</a></h3>
                                <div class="price ml-auto"><span>$520.00</span></div>
                            </div>
                        </div>
                        <p class="p-3">
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>10 November 2024, 02 Desember 2024, 09 Januari 2025 (+11 Tanggal Lainnya)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-hotel mr-2"></i>
                                <span>Le Meridien Tower / Emaar Grand / setaraf (Makkah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-building mr-2"></i>
                                <span>Dar Al Naeem Hotel (Madinah)</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane mr-2"></i>
                                <span>Garuda Indonesia, Oman Air, Qatar Airways / Oman Air</span>
                            </span>
                            <span class="d-flex align-items-center mb-2">
                                <i class="fas fa-plane-departure mr-2"></i>
                                <span>Soekarno-Hatta International Airport (CGK)</span>
                            </span>
                        </p>
                        <div class="p-3 text-center">
                            <a href="#" class="btn btn-primary">Detail Paket</a>
                        </div>
                    </div>
                </div>
                <!-- Ulangi div di atas untuk paket lainnya -->
            </div>
        </div>
    </div>


    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="section-title text-center mb-3">
                        Ibadah Umroh Bersama Kami
                    </h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 mb-4 mb-lg-0">
                    <div class="h-100">
                        <div class="frame h-100">
                            <div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg')">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-flex flex-column order-lg-2 mb-4 mb-lg-0">
                    <div class="feature-1 d-flex mb-3">
                        <div class="align-self-center">
                            <h3>Tiket Pesawat Pulang Pergi</h3>
                            <p class="mb-0">
                                Penerbangan Langsung dari Kota Keberangkatan Ke Jeddah
                            </p>
                        </div>
                    </div>

                    <div class="feature-1 d-flex mb-3">
                        <div class="align-self-center">
                            <h3>Fasilitas Paket Umroh</h3>
                            <p class="mb-0">
                                Hotel, Transportasi, Visa, Makan dan juga pemandu umroh
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-flex flex-column order-lg-3 mb-4 mb-lg-0">
                    <div class="feature-1 d-flex mb-3">
                        <div class="align-self-center">
                            <h3>Pemandu Umroh Kami</h3>
                            <p class="mb-0">
                                Tim profesional kami siap membantu anda saat umroh
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
