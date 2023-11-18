@extends('layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header" style="margin-top: 15px;">
                                {{-- <div class="zoomable-image-container">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->judul }}"
                                            class="zoomable-image" style="max-width: 100%;">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </div> --}}
                                <style>
                                    .zoomable-image-container {
                                        max-height: 100%;
                                        position: relative;
                                        overflow: hidden;
                                    }

                                    .zoomable-image {
                                        transition: transform 0.5s;
                                    }

                                    .zoomable-image:hover {
                                        transform: scale(1.2);
                                        cursor: pointer;
                                    }
                                </style>
                            </div>

                            <div class="card-body">
                                <h4>{{ $pricing->nama_pricingsp }}</h4>
                                <h6>Rp. {{ $pricing->harga_pricingsp }},-</h6>
                                <p>{!! $pricing->deskripsi_pricingsp !!}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
