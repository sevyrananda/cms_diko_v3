<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-1 footer-contact"></div>
        <div class="col-lg-4 col-md-12 footer-contact">
        <h3>DIKO</h3>
        {{-- <img src="{{ url('HeroBiz') }}/assets/img/DIKO TRANSPARANT.png" class="img-fluid" alt="" style="width: auto; height:150px"> --}}
        <p>
          <strong>Office:</strong> Ruko Balelintang no. 2, Jl. Letkol Suwarno,
          Kota Madiun<br>
          Jawa Timur<br>
          <strong>Phone:</strong> - <br>
          <strong>Email:</strong> diko.co.id@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-12 footer-links">
        <h4>Tentang DIKO</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
          {{-- <li><i class="bx bx-chevron-right"></i><a href="#">Partner Resmi</a></li> --}}
        </ul>
        <br>
        <h4>Navigasi</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('sitemap') }}">Sitemap (Peta Situs)</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-links">
        <h4>Produk</h4>
        <ul>
            @foreach ($products as $product)
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('produk.preview', ['id' => $product->id, 'selection' => $product->preview_selection]) }}">DIKO {{ $product->nama_produk }}</a></li>
                {{-- <li>
                    <a class="nav-link scrollto" href="{{ route('produk.preview', ['id' => $product->id, 'selection' => $product->preview_selection]) }}">
                        {{ $product->nama_produk }}
                    </a>
                </li> --}}
            @endforeach
          {{-- <li><i class="bx bx-chevron-right"></i> <a href="">DIKO SP</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">DIKO POS</a></li> --}}
        </ul>
      </div>

    </div>
  </div>
</div>

<div class="container">

  <div class="copyright-wrap d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>DIKO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
      <a href="https://www.facebook.com/profile.php?id=61554510231485" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://www.instagram.com/diko.co.id?igsh=cnJteDJwNW52Yzg%3D&utm_source=qr" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</div>
</footer><!-- End Footer -->
