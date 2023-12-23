@extends('layout3.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color: #fff;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('HeroBiz/assets/img/DIKO TRANSPARANT.png') }}" class="img-fluid animated" style="width: 370px;">
            <h2>Selamat Datang di <span>DIKO POS</span></h2>
            <p>Kelola Pinjaman dan Laporan Keuangan dengan Lebih Mudah!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto" style="background-color: #144B9A;">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"
                    style="color: #144B9A;"><i class="bi bi-play-circle" style="color: #144B9A;"></i><span>Watch
                        Video</span></a>
            </div>
        </div>
    </section><!-- End Clients Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="background-color: #485664; margin-top: 10px;">
            <div class="container" data-aos="fade-up">
                <div class="flex" style="background-color: #485664;">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('HeroBiz/mockup-1.png') }}" class="img-fluid animated fill-shadow"
                                alt="Gambar DIKO">
                        </div>
                        <div class="col-md-6">
                            <h2 style="color: #fff;">Bagaimana Diko POS membantu Anda?</h2>
                            <ul class="list-group" style="color: #fff;">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Pelayanan Cepat dan tepat dalam setiap transaksi.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Ragam fitur di dalam Modul Laporan akan memudahkan user dalam pembuatan berbagai Laporan yang diperlukan</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Keamanan operasional yang diatur dengan hak akses pada user tertentu.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Fitur {{ $product->nama_produk }}</h2>
                </div>

                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                    @foreach ($pos as $key => $feature)
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
                    @foreach ($pos as $key => $feature)
                        <div class="tab-pane {{ $key === 0 ? 'active show' : '' }}" id="tab-{{ $key + 1 }}">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                    <h3>{{ $feature['judul_detail'] }}</h3>
                                    <p class="fst-italic">
                                        {{ $feature['isi_detail'] }}
                                    </p>
                                </div>
                                <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ route('image.displayImage' , $feature['image']) }}" alt=""
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
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik kami
                        akan mempermudah bisnis Anda.</h2>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan
                        Akurat, Keputusan Bijak, Produk Akuntansi Terpercaya</p>
                </div>

                <div class="row gy-5">
                    @foreach ($pos2 as $feature)
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $feature['delay'] }}">
                            <div class="service-item">
                                <div class="img">
                                    <a href="{{ route('image.displayImage' , $feature['image']) }}" data-gallery="fitur-gallery"
                                        class="glightbox preview-link">
                                        <img src="{{ route('image.displayImage' , $feature['image']) }}" class="img-fluid"
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

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services" style="background-color:#003152;">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/time-management.png') }}" alt="manage" width="50"
                                    height="50">
                                <!-- <i class="bi bi-activity icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Pengelolaan Keuangan menjadi lebih teratur dan efisien</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/global-network.png') }}" alt="network" width="45"
                                    height="45">
                                <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Sed ut perspici</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola jaringan cabang Bisnis Anda.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/transaction.png') }}" alt="transaction" width="45"
                                    height="45">
                                <!-- <i class="bi bi-calendar4-week icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Magni Dolores</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Proses transaksi bisnis menjadi lebih cepat dan tepat</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
                </div>

                <div class="row gy-4 justify-content-center">
                    @foreach ($pricings as $post)
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pricing-item featured">

                                <div class="pricing-header">
                                    <h3>{{ $post->nama_pricingpos }}</h3>
                                    <h4><sup>Rp. </sup>{{ number_format($post->harga_pricingpos, 0, ',', '.') }},-<span> / month</span></h4>
                                </div>

                                <div>
                                    <ul>
                                        @foreach ($post->deskripsi as $deskripsi)
                                            <li><i class="bi bi-dot"></i>{{ $deskripsi->deskripsi }}</li>
                                        @endforeach
                                    </ul>
                                </div>

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

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    function setLogoSize(logoClass, width, height) {
                        document.querySelectorAll(logoClass).forEach((logo) => {
                            logo.style.width = width;
                            logo.style.height = height;
                        });
                    }

                    setLogoSize(".small-logo", "100px", "100px");
                });

                function showModal(modalId) {
                    new bootstrap.Modal(document.getElementById(modalId)).show();
                }

                function closeModal(modalId) {
                    new bootstrap.Modal(document.getElementById(modalId)).hide();
                }

                @foreach ($posts as $index => $plug)
                    const modalId{{ $index + 1 }} = `modal{{ $index + 1 }}`;
                    const logoSelector{{ $index + 1 }} = `.col-md-3.grid-item:nth-child({{ $index + 1 }})`;

                    document.querySelector(logoSelector{{ $index + 1 }}).addEventListener("click", function() {
                        showModal(modalId{{ $index + 1 }});
                    });
                @endforeach
            </script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Modals Plugin-->
            @foreach ($posts as $index => $plug)
                <div class="modal fade" id="modal{{ $index + 1 }}" tabindex="-1" role="dialog"
                    aria-labelledby="modal{{ $index + 1 }}Label" aria-hidden="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal{{ $index + 1 }}Label">{{ $plug->judul }}</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    data-target="#modal{{ $index + 1 }}" aria-label="Close">
                                    <span aria-hidden="false">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $plug->isi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <section id="plugin-menu" class="plugin-menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Our Plugin Menu</h2>
                    </div>

                    <div id="carouselExample" class="carousel slide text-center" data-ride="carousel">
                        @php
                            $totalPlugins = count($posts);
                            $pluginsPerSlide = 4;
                            $totalSlides = ceil($totalPlugins / $pluginsPerSlide);
                        @endphp

                        @for ($slide = 1; $slide <= $totalSlides; $slide++)
                            <div class="carousel-item{{ $slide === 1 ? ' active' : '' }}">
                                <div class="row">
                                    @for ($index = 1 + $pluginsPerSlide * ($slide - 1); $index <= min($totalPlugins, $pluginsPerSlide * $slide); $index++)
                                        <div class="col-sm">
                                            <img src="{{ route('image.displayImage' , $posts[$index - 1]->image) }}" alt="Image"
                                                style="max-width: 100px;" data-toggle="modal"
                                                data-target="#modal{{ $index }}">
                                        </div>
                                    @endfor
                                </div>

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
                        @endfor
                    </div>
                </div>
            </section>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Kontak</h2>
                    <p> Kami siap memberikan bantuan dalam menjawab pertanyaan, ataupun menerima umpan balik dari Anda yang berharga dari kami. Kami berkomitmen untuk menyajikan pelayanan yang luar biasa untuk Pengguna.</p>
                </div>
            </div>

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="card flex-fill shadow p-3">
                            <div class="card-body">
                                <h3>More Info</h3>
                                <p>Hubungi kami menggunakan informasi di bawah ini</p>
                                <br /><br />
                                <div class="info-item d-flex">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h4>Alamat:</h4>
                                        <p>Ruko Balelintang no. 2, Jl. Letkol Suwarno,
                                            Kota Madiun<br>
                                            Jawa Timur<br></p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h4>Alamat Email:</h4>
                                        <p>diko.co.id@gmail.com</p>
                                    </div>
                                </div>

                                <div class="info-item d-flex">
                                    <i class="bi bi-phone flex-shrink-0"></i>
                                    <div>
                                        <h4>Nomor Telepon:</h4>
                                        <p>HP : -</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-body">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.444107472913!2d111.5406524!3d-7.6352957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be937b126945%3A0x2ac1b7fffe7bacff!2sBRI%20Unit%20Bale%20Lintang!5e0!3m2!1sid!2sid!4v1703229139201!5m2!1sid!2sid"
                                    width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
