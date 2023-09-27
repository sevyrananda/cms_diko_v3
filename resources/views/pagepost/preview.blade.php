@extends('layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header" style="margin-top: 15px;">
                                <div class="zoomable-image-container">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                            class="zoomable-image" style="max-width: 100%;">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </div>
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
                                    <p>29 September 2023</p>
                                    <p><i>Create by {{ $post->author_name }}</i></p>
                                </div>
                                <h4>{{ $post->title }}</h4>
                                <p>Category: {{ $post->category }}</p>
                                <p>{{ $post->content }}</p>
                                <hr>
                                <p style="text-align: right;"><a href="" class="btn btn-primary">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
