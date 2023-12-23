@extends('layout2.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
                    <h1 style="opacity: 1;">
                        Selamat Datang di DIKO
                    </h1>
                    <h2>Digital Innovation, Key to Optimization</h2>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ url('Techie') }}/assets/img/TRANS3.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>


        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ url('Techie') }}/assets/img/3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 mt-3 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3 class=" text-center">Selamat datang di DIKO</h3>
                        <p class=" text-center">Mitra terpercaya Anda untuk Solusi Bisnis yang Inovatif dan Berkelanjutan. <br> Kami berkomitmen untuk membantu Lembaga Keuangan, Koperasi, dan UMKM untuk Mengoptimalkan Operasi mereka melalui Layanan Terbaik dan Teknologi Terkini. Sambut Era Baru Efisiensi dan Kemudahan dalam Mencapai Potensi penuh Bisnis Anda</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Motto Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Mengapa Memilih DIKO?</h2>
                    <p>DIKO merupakan Perusahaan yang memiliki tim ahli yang berkomitmen untuk menghadirkan solusi perangkat lunak terbaik bagi industri Akuntansi. Inilah mengapa kami menjadi pilihan utama</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-devices"></i>
                            <h4>Inovasi Tanpa Batas</h4>
                            <p>
                                Dengan Fokus pada Inovasi, Kami membawa Teknologi Terkini ke dalam Genggaman Anda. Software Kami dirancang untuk Memenuhi Tantangan Bisnis Modern
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-wallet"></i>
                            <h4>Kemudahan Penggunaan</h4>
                            <p>
                                Kami Percaya bahwa Teknologi yang Canggih seharusnya Mudah untuk Digunakan. Antarmuka Pengguna kami yang Intuitif mampu memastikan bahwa siapa pun dapat menguasai Pengoperasian Software kami dengan cepat
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-user-pin"></i>
                            <h4>Keamanan Data Utama</h4>
                            <p>
                                Keamanan data Anda adalah Prioritas Kami. Dengan Sistem Enkripsi Tingkat Tinggi dan Kontrol Akses yang Ketat, Kami Melindungi Informasi Berharga Perusahaan Anda.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ url('Techie') }}/assets/img/landing3.png" alt="" class="img-fluid">
                    </div> --}}
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Faq Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Produk Unggulan Kami</h2>
                </div>
                <div class="faq-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 style="color: white;">DIKO SP</h3><hr style="border-color: white; border-width: 2px;">
                            <p style="color: white;"> Solusi Simpan Pinjam Terpadu:
                                Sistem DIKO SP kami adalah Solusi Komprehensif yang Mencakup Manajemen Anggota, Pencatatan Simpanan, Manajemen Pinjaman, dan Pelaporan Keuangan yang Akurat.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 style="color: white;">DIKO POS</h3><hr style="border-color: white; border-width: 2px;">
                            <p style="color: white;">
                                Ringkas, Efisien, dan Handal: Solusi untuk pengelolaan Transaksi Jual Beli dengan Mudah, Melacak Inventaris secara Real-Time, dan Meningkatkan Efisiensi Operasional
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                            <br>
                            <h3 style="color: white;">Pembaruan Software dan User Support 24/7</h3><hr style="border-color: white; border-width: 2px;">
                            <p style="color: white;">
                                Kami memahami Pentingnya Ketersediaan dan Support. Nikmati Pembaruan DIKO dan User Support 24/7 dari tim ahli kami
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Motto Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h1>Mari Wujudkan Bersama!</h1>
                    <h5>Kami Percaya bahwa Setiap Perusahaan memiliki Potensi Luar Biasa untuk Tumbuh dan Berkembang. Mari Wujudkan Bersama Visi dan Misi Bisnis Anda. Hubungi kami segera dan temukan bagaimana DIKO dapat menjadi Mitra Sukses Anda dalam Perjalanan Bisnis</h5>
                </div>

            </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->
@endsection
