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
                                alt="Gambar DIKO POS">
                        </div>
                        <div class="col-md-6">
                            <h2 style="color: #fff;">Bagaimana Diko POS membantu Anda?</h2>
                            <ul class="list-group" style="color: #fff;">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Pelayanan terbaik dengan kejujuran dan profesionalisme dalam setiap
                                        transaksi.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Layanan simpan pinjam yang terintegrasi dengan sistem inventori, proyek, dan
                                        penggajian.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Keamanan operasional dengan hak akses menggunakan fitur tertentu</span>
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
                    <h2>Fitur Diko POS</h2>
                </div>
                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                    @foreach ($posts as $post)
                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-cash-coin color-teal"></i>
                            <h4>{{ $post->judul_icon1 }}</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->


                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Kemudahan Akses Pembayaran</h3>
                                <p class="fst-italic">
                                    Anggota koperasi untuk melakukan pembayaran atau transaksi sekali bayar dengan mudah.
                                    Ini dapat mencakup pembelian saham, pembayaran pinjaman, atau pembelian produk dan
                                    layanan lainnya yang ditawarkan oleh koperasi.
                                    Memungkinkan anggota untuk melihat riwayat transaksi mereka, sehingga mereka dapat
                                    melacak semua pembayaran dan transaksi yang telah mereka lakukan.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik
                        kami akan mempermudah bisnis Anda.</h2>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan
                        Akurat,
                        Keputusan Bijak, Produk Akuntansi Terpercaya</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <!-- <img src="{{ url('HeroBiz') }}/assets/img/register.jpg" class="img-fluid" alt=""> -->
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Master</h3>
                                </a>
                                <p> Mengelola data-data inti yang mencakup informasi produk atau layanan yang ditawarkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->


                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up"></i>
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kasir</h3>
                                </a>
                                <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan
                                    pengelolaan keuangan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos3.pngg" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos3.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i> <!-- Ikon grafik batang -->
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembelian</h3>
                                </a>
                                <p>Mencatat tahapan penting dalam menghasilkan pendapatan dan memastikan pelanggan
                                    mendapatkan layanan yang mereka inginkan dengan cara aman dan efisien.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Penjualan</h3>
                                </a>
                                <p>Membantu menyimpan riwayat penjualan pengguna yang memungkinkan mereka untuk melihat
                                    stock yang telah terjual.</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Transaksi Stock</h3>
                                </a>
                                <p>Mencatat pinjaman nasabah, menghitung total tabungan nasabah dan keterangan mutasi
                                    anggota</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembukuan</h3>
                                </a>
                                <p>Membantu bisnis dalam melacak pendapatan, biaya, laba, dan arus kas</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                </div>
                @foreach ($posts as $post)
                <h4>{{ $post->judul }}</h4>
                <p>{{ $post->isi }}</p>
                @endforeach
            </div>
                </div>
            </div>
        </section><!-- End Services Section -->
    @endsection
