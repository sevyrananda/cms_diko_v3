@extends('layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">Blog</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                                @else
                                    <img src="{{ asset('placeholder-image.jpg') }}" class="card-img-top" alt="{{ $post->title }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <a href="{{ route('show', ['id' => $post->id]) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
