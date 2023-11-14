@extends('layout.app')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Plugin - DIKO POS</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Tambah Data</a>
                                <a href="{{ route('posplugin.previewalldata') }}" class="btn btn-success"><i class="fas fa-eye"></i> Preview in Website</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            {{-- <th>Image</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $post->judul }}</td>
                                                    <td>{{ $post->isi }}</td>
                                                    {{-- <td>
                                                        @if ($post->image)
                                                            <img src="{{ asset('storage/' . $post->image) }}" alt="Image"
                                                                style="max-width: 100px;">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        <div class="d-flex justify-content">

                                                            <a href="{{ route('previewPos', ['id' => $post->id]) }}" class="btn btn-primary">Preview</a>
                                                            <button type="submit" class="btn btn-warning"
                                                                style="margin-left: 10px;" data-toggle="modal"
                                                                data-target="#editModal{{ $post->id }}">Edit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                style="margin-left: 10px;"
                                                                onclick="deletePost({{ $post->id }}, '{{ $post->judul }}')">
                                                                Delete
                                                            </button>

                                                            <!-- Formulir Penghapusan Tersembunyi -->
                                                            <form id="delete-form-{{ $post->id }}" action="{{ route('destroyPos', ['id' => $post->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- Your other form elements go here -->
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

    @include('pages.diko_pos.plug.modal.create_modal')
    @include('pages.diko_pos.plug.modal.edit_modal')
@endsection
