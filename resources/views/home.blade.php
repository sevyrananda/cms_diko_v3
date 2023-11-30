@extends('layout.app')
@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row ">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-16">Jumlah Produk DIKO</h5>
                        <h2 class="mb-3 font-24">{{ $totalLayout }}</h2>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="{{url('otika')}}/assets/img/banner/1.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-16">Jumlah User</h5>
                    <h2 class="mb-3 font-24">{{ $totalUsers }}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{url('otika')}}/assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-16">Akun yang sedang login</h5>
                    <h2 class="text-muted font-16">Email : {{ $user->name }}</h2>
                    <h2 class="text-muted font-16">Name : {{ $user->email }}</h2>
                    <p class="text-muted font-14 m-b-0">Login Time: {{ $user->last_login }}</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{url('otika')}}/assets/img/banner/3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12">
        <div class="card ">
          <div class="card-header">
            <h4>Total Kunjungan</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-11 ml-4">
                <div id="chart3"></div>
                <div class="row mb-0">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="list-inline text-center">
                      <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle" class="col-green"></i>
                        <h5 class="m-b-0">675</h5>
                        <p class="text-muted font-14 m-b-0">Weekly</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="list-inline text-center">
                      <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle" class="col-orange"></i>
                        <h5 class="m-b-0">1,587</h5>
                        <p class="text-muted font-14 m-b-0">Monthly</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="list-inline text-center">
                      <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle" class="col-green"></i>
                        <h5 class="mb-0 m-b-0">45,965</h5>
                        <p class="text-muted font-14 m-b-0">Yearly</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
@endsection
