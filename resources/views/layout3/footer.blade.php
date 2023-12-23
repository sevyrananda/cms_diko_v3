<footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="footer-info">
          <h3> <span style="color: #16b5ff;">DI</span>KO<span style="color: #16b5ff;">.</span></h3>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Produk</h4>
        <ul>
            @foreach ($products as $product)
                <li><a href="{{ route('produk.preview', ['id' => $product->id, 'selection' => $product->preview_selection]) }}">DIKO {{ $product->nama_produk }}</a></li>
            @endforeach
          {{-- <li><a href="">DIKO SP</a></li>
          <li><a href="">DIKO Pos</a></li> --}}
          <li>
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg/2060px-Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png"
              class="img-fluid animated"
              alt=""
              style="height:55px; padding:10px; margin-top:50px;"
              >
            <img src="https://idxcoop.kemenkopukm.go.id/images/logo-idxcoop.png"
              class="img-fluid animated"
              alt=""
              style="height:55px; padding:10px; margin-top:50px;"
            >
            <img src="https://qms-consulting.id/wp-content/uploads/2020/12/1_G1Yc_22hHBfgGlNdRJpBDw.jpeg"
              class="img-fluid animated"
              alt=""
              style="height:55px; padding:10px; margin-top:50px;"
            >
            <img src="https://1.bp.blogspot.com/-uprDrIHInls/X9N5GuSqiFI/AAAAAAAAHkM/8CMLFZSv-IIbwo4-vbGeo5xubP8riGhigCLcBGAsYHQ/s1000/bangga%2Bbuatan%2Bindonesia-01.png"
              class="img-fluid animated"
              alt=""
              style="height:55px; padding:10px; margin-top:50px;"
            >
          </li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Tentang DIKO</h4>
        <ul>
          <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
          {{-- <li><a href="#">Partner Resmi</a></li> --}}
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Hubungi Kami</h4>
        <p>
          <strong>Office:</strong> Ruko Balelintang no. 2, Jl. Letkol Suwarno<br>
          Kota Madiun<br>
          Jawa Timur<br><br>
          <strong>Phone:</strong> - <br>
          <strong>Email:</strong> diko.co.id@gmail.com<br>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="footer-legal text-center">
  <div
    class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

    <div class="d-flex flex-column align-items-center align-items-lg-start">
      <div class="copyright">
        &copy; Copyright <strong><span>DIKO</span></strong>. All Rights Reserved
      </div>
    </div>

    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      {{-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
    </div>
  </div>
</div>

</footer><!-- End Footer -->
