@extends('layout3.app')
@section('content')
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
                <img src="{{ asset('HeroBiz/assets/img/diko-sp-2.png') }}" alt="" style="width: 100%;">
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
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui semua perangkat</p>
                        </div>
                    </div><!--End Service Item-->
                </div>
            </div>
        </section><!-- End Featured Services Section -->

    {{-- ======= Pricing Section =======  --}}
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Pricing</h2>
            </div>

            <div class="row gy-4 justify-content-center">
                @foreach ( $post as $post )          
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured">
                        
                            <div class="pricing-header">
                                <h3>{{ $post->nama_pricingsp }}</h3>
                                <h4><sup>Rp. </sup>{{ $post->harga_pricingsp }},-<span> / month</span></h4>
                            </div>
                            
                            {{-- <ul>
                                <li><i class="bi bi-dot"></i> <span>{!! $post->deskripsi_pricingsp !!}</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul> --}}

                            <div>{!! $post->deskripsi_pricingsp !!}</div>
                            
                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section> 
    {{-- <End Pricing Section> --}}

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
