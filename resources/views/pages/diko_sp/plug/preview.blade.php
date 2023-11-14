@extends('layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header" style="margin-top: 15px;">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih Judul
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach ($posts as $post)
                                            <a class="dropdown-item" href="#" onclick="displayContent('{{ str_replace(array("\r", "\n"), '\n', addslashes($post->isi)) }}', '{{ $post->judul }}')">{{ $post->judul }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- Display post details --}}
                                <div class="d-flex justify-content-between">
                                    <p>Content :</p>
                                    {{-- Update to display post author --}}
                                    <p><i>Created by {{ $post->author_name }}</i></p>
                                </div>
                                {{-- Display post category --}}
                                {{-- <p>Category: {{ $post->isi }}</p> --}}
                                {{-- Display post content --}}
                                <p id="selected-content"></p>
                                <hr>
                                <p style="text-align: right;"><a href="#" id="read-more-link" class="btn btn-primary">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Existing styles */
    
        /* Additional style to reduce spacing */
        #selected-content {
            margin-bottom: 10px; /* Adjust the margin as needed */
        }
    </style>    

    <script>
        function displayContent(content, judul) {
            // Ganti semua newline (\n) dengan tag <br>
            content = content.replace(/\n/g, "<br>");

            // Update the content based on the selected post
            document.getElementById('selected-content').innerHTML = content;

            // Update all dropdown items to have btn-secondary class
            var dropdownItems = document.querySelectorAll('.dropdown-item');
            dropdownItems.forEach(function(item) {
                item.classList.add('btn-secondary');
            });

            // Update the selected dropdown item to have btn-primary class
            // event.target.classList.remove('btn-secondary');
            // event.target.classList.add('btn-primary');

            // Update the "Pilih Judul" button text and style
            var dropdownButton = document.getElementById('dropdownMenuButton');
            dropdownButton.innerText = 'Judul Dipilih: ' + judul;
            dropdownButton.classList.remove('btn-secondary');
            dropdownButton.classList.add('btn-primary');

            // Update the "Read More" link to the selected post
            var readMoreLink = document.getElementById('read-more-link');
            readMoreLink.href = '';  // Put the actual link to the selected post here
        }
    </script>

@endsection
