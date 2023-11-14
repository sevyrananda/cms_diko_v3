@extends('layout.app')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-4">
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4>Produk</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <!-- Button to trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#createModal"><i class="fas fa-plus"></i>
                                        Create New Produk
                                    </button>
                                    <a href="" class="btn btn-success"><i class="fas fa-eye"></i>
                                        Preview in Website</a>
                                </div>
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $product->nama_produk }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content">
                                                            @if ($product->preview_selection === 'preview_pos')
                                                                <a href="{{ route('produk.preview', ['id' => $product->id, 'selection' => 'preview_pos']) }}"
                                                                    class="btn btn-primary">Preview {{ $product->nama_produk }}</a>
                                                            @elseif ($product->preview_selection === 'preview_sp')
                                                                <a href="{{ route('produk.preview', ['id' => $product->id, 'selection' => 'preview_sp']) }}"
                                                                    class="btn btn-primary">Preview {{ $product->nama_produk }}</a>
                                                            @endif

                                                            <button type="submit" class="btn btn-warning"
                                                                style="margin-left: 5px;" data-toggle="modal"
                                                                data-target="#editModal{{ $product->id }}">Edit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                style="margin-left: 5px;"
                                                                onclick="deletePost({{ $product->id }}, '{{ $product->judul }}')">
                                                                Delete
                                                            </button>

                                                            <!-- Formulir Penghapusan Tersembunyi -->
                                                            <form id="delete-form-{{ $product->id }}"
                                                                action="{{ route('produk.destroy', ['id' => $product->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function deletePost(id, judul) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to delete the post with title: "' + judul + '". This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi penghapusan
                    const form = document.getElementById('delete-form-' + id);
                    form.submit();
                }
            });
        }
    </script>

    <!-- Create Post Modal -->
    @include('pages.produk.modals.create_modal')
    @include('pages.produk.modals.edit_modal')
@endsection
