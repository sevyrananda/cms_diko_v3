<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo">
            <a href="{{ url('/') }}">DIKO</a>
            {{-- <img src="{{ url('Techie') }}/assets/img/TRANS3.png" class="img-fluid" alt="" style="width: auto; height:150px" width="40" height="70"> --}}
        </h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link scrollto">Product <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        @foreach ($products as $product)
                            <li>
                                <a class="nav-link scrollto" href="{{ route('produk.preview', ['id' => $product->id, 'selection' => $product->preview_selection]) }}">
                                   DIKO {{ $product->nama_produk }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/#about">About</a></li>
                <li><a class="nav-link scrollto" href="/#services">Features</a></li>
                <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="{{ route('perusahaan') }}" target="_blank">PROFIL</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
