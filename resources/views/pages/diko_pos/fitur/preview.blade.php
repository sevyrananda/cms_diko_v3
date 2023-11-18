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
                                <div class="d-flex justify-content-between">
                                    {{-- <p>{{ $post->id }}</p> --}}
                                    {{-- <p><i>Create by {{ $post->author_name }}</i></p> --}}
                                </div>
                                <i>{{ $posts->icon1 }}</i>
                                <h6>{{ $posts->judul_icon1 }}</h6>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
