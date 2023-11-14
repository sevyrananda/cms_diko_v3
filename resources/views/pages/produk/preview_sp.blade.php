@extends('layout3.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color:#C3E2FF;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out" style="color : #144B9A;">
            <!-- <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated"> -->
            <p style="font-size: 15px; font-stretch: expanded;">

            </p>
            <p style="font-size: 45px; font-weight: bold; ">
                Solusi terbaik untuk manajemen keuangan bisnis Anda.</p>
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Integrasi canggih: Inventori,
                Proyek, dan Penggajian, semua dalam satu solusi andal!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"><i
                        class="bi bi-play-circle"></i><span>Watch
                        Video</span></a>
            </div>
            <div>
                <img src="{{ url('HeroBiz') }}//assets/img/diko-sp-2.png" alt="" style="width: 100%;">
            </div>
        </div>
    </section>


    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/time-management.png" alt="manage" width="50"
                                    height="50">
                                <!-- <i class="bi bi-activity icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Pengelolaan keuangan menjadi lebih
                                efisien
                                dan tertib</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/global-network.png" alt="network" width="45"
                                    height="45">
                                <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
                            </div>
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola
                                jaringan
                                cabang</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/transaction.png" alt="transaction" width="45"
                                    height="45">
                                <!-- <i class="bi bi-calendar4-week icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Magni Dolores</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Proses transaksi bisnis lebih
                                lancar dan
                                instan</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <!-- <i class="bi bi-broadcast icon"></i> -->
                                <img src="{{ url('HeroBiz') }}/responsive-design.png" alt="device" width="45"
                                    height="45">
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui
                                semua perangkat</p>
                        </div>
                    </div><!--End Service Item-->
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Fitur {{ $product->nama_produk }}</h2>
                </div>

                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                    @foreach ($sp as $key => $feature)
                        <li class="nav-item col-6 col-md-4 col-lg-2">
                            <a class="nav-link {{ $key === 0 ? 'active show' : '' }}" data-bs-toggle="tab"
                                data-bs-target="#tab-{{ $key + 1 }}">
                                <i class="{{ $feature['icon1'] }}"></i>
                                <h4>{{ $feature['judul_icon1'] }}</h4>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach ($sp as $key => $feature)
                        <div class="tab-pane {{ $key === 0 ? 'active show' : '' }}" id="tab-{{ $key + 1 }}">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                    <h3>{{ $feature['judul_detail'] }}</h3>
                                    <p class="fst-italic">
                                        {{ $feature['isi_detail'] }}
                                    </p>
                                </div>
                                <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ asset('storage/' . $feature['image']) }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik
                        kami
                        akan mempermudah bisnis Anda.</h2>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan
                        Akurat, Keputusan Bijak, Produk Akuntansi Terpercaya</p>
                </div>

                <div class="row gy-5">
                    @foreach ($sp2 as $feature)
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $feature['delay'] }}">
                            <div class="service-item">
                                <div class="img">
                                    <a href="{{ asset('storage/' . $feature['image']) }}" data-gallery="fitur-gallery"
                                        class="glightbox preview-link">
                                        <img src="{{ asset('storage/' . $feature['image']) }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="details position-relative">
                                    <div class="icon">
                                        <i class="{{ $feature['icon2'] }}"></i>
                                    </div>
                                    <a href="#" class="stretched-link">
                                        <h3>{{ $feature['judul_icon2'] }}</h3>
                                    </a>
                                    <p>{{ $feature['isi'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
                </div>

                <div class="row gy-4 justify-content-center">
                    @foreach ($pricing as $post)
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pricing-item featured">

                                <div class="pricing-header">
                                    <h3>{{ $post->nama_pricingpos }}</h3>
                                    <h4><sup>Rp. </sup>{{ $post->harga_pricingpos }},-<span> / month</span></h4>
                                </div>

                                <div>{!! $post->deskripsi_pricingpos !!}</div>

                                <div class="text-center mt-auto">
                                    <a href="#" class="buy-btn">Buy Now</a>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- ======= Plugin Section ======= -->
        <section id="plugin-section">
            <style>
                .grid-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            </style>

            {{-- Route Modal Plugin --}}
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Function to set the size of the logos
                    function setLogoSize(logoClass, width, height) {
                        const logos = document.querySelectorAll(logoClass);
                        logos.forEach((logo) => {
                            logo.style.width = width;
                            logo.style.height = height;
                        });
                    }

                    // Set the size of the logos (you can adjust the width and height values)
                    setLogoSize(".small-logo", "100px", "100px");
                });

                // Function to display the modal with the specified content
                function showModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.show();
                }

                // Add click event listeners for each logo
                // Logo 1 (Plugin Master Menu Bank & E-Commerce)
                document.querySelector(".col-md-3.grid-item:nth-child(1)").addEventListener("click", function() {
                    showModal("modal1");
                });

                // Logo 2 (Plugin Master Barcode Form Add)
                document.querySelector(".col-md-3.grid-item:nth-child(2)").addEventListener("click", function() {
                    showModal("modal2");
                });

                // Logo 3 (Plugin Master Golongan Jaminan)
                document.querySelector(".col-md-3.grid-item:nth-child(3)").addEventListener("click", function() {
                    showModal("modal3");
                });

                // Logo 4 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(4)").addEventListener("click", function() {
                    showModal("modal4");
                });

                // Logo 5 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(5)").addEventListener("click", function() {
                    showModal("modal5");
                });

                // Logo 6 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(6)").addEventListener("click", function() {
                    showModal("modal6");
                });

                // Logo 7 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(7)").addEventListener("click", function() {
                    showModal("modal7");
                });

                // Logo 8 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(8)").addEventListener("click", function() {
                    showModal("modal8");
                });

                function closeModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.hide();
                }
            </script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Modals Plugin-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal1Label">Plugin Master Menu Bank & E-Commerce</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal1"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Plugin ini mendukung berbagai bank dan penyedia layanan pembayaran, mencakup beragam opsi
                                seperti kartu kredit, transfer bank, e-wallet, dan banyak lagi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal2Label">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal1"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga dapat terintegrasi dengan sistem POS (Point of Sale) Anda, memberikan
                                kemudahan dalam proses penjualan dan pencatatan data produk.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal3Label">Plugin Master Menu Golongan Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal3"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memungkinkan pengguna untuk dengan mudah mengintegrasikan berbagai opsi pembayaran
                                dari berbagai bank dan penyedia layanan pembayaran dalam satu menu yang terstruktur,
                                memberikan pengalaman belanja yang lebih nyaman bagi pelanggan. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal4Label">Plugin Master Menu Kode Transaksi Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal5Label">Plugin 5</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal6Label">Plugin 6</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal7Label">Plugin 7</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal8Label">Plugin 8</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section id="plugin-menu" class="plugin-menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Our Plugin Menu</h2>
                    </div>

                    <div id="carouselExample" class="carousel slide text-center" data-ride="carousel">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <!-- Loop through the logos for slide 1 -->
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="col-sm">
                                        <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png"
                                            alt="Logo {{ $i }}" class="small-logo mx-auto p-2"
                                            data-toggle="modal" data-target="#modal{{ $i }}">
                                    </div>
                                @endfor

                                <!-- Carousel control buttons for slide 1 -->
                                <a class="carousel-control-prev" href="#carouselExample" role="button"
                                    data-slide="prev" style="color: black; left: -10%;">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"
                                        style="filter: invert(100%);"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample" role="button"
                                    data-slide="next" style="color: black; right: -10%;">
                                    <span class="carousel-control-next-icon" aria-hidden="true"
                                        style="filter: invert(100%);"></span>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row">
                                <!-- Loop through the logos for slide 2 -->
                                @for ($i = 9; $i <= 16; $i++)
                                    <div class="col-sm">
                                        <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png"
                                            alt="Logo {{ $i }}" class="small-logo mx-auto p-2"
                                            data-toggle="modal" data-target="#modal{{ $i }}">
                                    </div>
                                @endfor

                                <!-- Carousel control buttons for slide 2 -->
                                <a class="carousel-control-prev" href="#carouselExample" role="button"
                                    data-slide="prev" style="color: black; left: -10%;">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"
                                        style="filter: invert(100%);"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample" role="button"
                                    data-slide="next" style="color: black; right: -10%;">
                                    <span class="carousel-control-next-icon" aria-hidden="true"
                                        style="filter: invert(100%);"></span>
                                </a>
                            </div>
                        </div>

                        <!-- ... Repeat for additional slides ... -->

                    </div>
                </div>
            </section>
        </section>

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content px-xl-5">
                            <h3><strong>Pertanyaan</strong> yang sering diajukan</h3>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">
                            @foreach ($faq as $post)
                                <!-- Mengganti $post menjadi $posts -->
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $post->id }}">
                                            <!-- Menggunakan $post->id -->
                                            <i class="bi bi-question-circle question-icon"></i>
                                            {{ $post->question }} <!-- Menggunakan $post->question -->
                                        </button>
                                    </h3>
                                    <div id="faq-content-{{ $post->id }}" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            {{ $post->answer }} <!-- Menggunakan $post->answer -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                </div>
            </div>
        </section>

        <!-- ======= 2 Card Section ======= -->
        <section id="card-section" class="card-section" style="background-color: #C3E2FF;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{ url('HeroBiz') }}/assets/img/globe.png" class="card-img-top"
                                            alt="Gambar Card 1" style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title">Coba DIKO, gratis!</h5>
                                        <p class="card-text">Level up pencatatan, management, dan pelaporan Bisnis Anda
                                            dengan menggunakan DIKO</p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #144B9A;">Mulai Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{ url('HeroBiz') }}/assets/img/telephone-call.png"
                                            class="card-img-top" alt="Gambar Card 2"
                                            style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title">Hubungi DIKO</h5>
                                        <p class="card-text">Consultant kami akan membantu untuk memilih aplikasi terbaik
                                            sesuai kebutuhan perusahaan Anda</p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #144B9A;">Ajukan Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-6">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sDIKO!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div><!-- End Google Maps -->
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="section-header">
                                <h2>Contact</h2>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Alamat:</h4>
                                    <p>Office : JL. Bulu Mas II No. 1 - Kanigoro - Kota Madiun - Jawa Timur<br>
                                        <br>Branch Office : Perum Griya Gadang Sejahtera Kav. 14 Gadang - Sukun - Kota
                                        Malang - Jawa Timur
                                    </p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Alamat Email:</h4>
                                    <p>cs@diko.co.id</p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Nomor Telepon:</h4>
                                    <p>HP : 0811-3636-09 <br>
                                        Hotline : (0351) 2812555 </p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
