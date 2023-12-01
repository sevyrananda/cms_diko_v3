@extends('layout.app')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    {{-- Datatables --}}
                    <div class="card">
                        <div class="card-header">
                            <h4>Plugin Produk Layout 2</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#createModal"><i class="fas fa-plus"></i>
                                Create New
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Isi</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($posts as $plug)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $plug->judul }}</td>
                                                <td>{{ $plug->isi }}</td>
                                                <td>
                                                    @if ($plug->image)
                                                        <img src="{{ route('image.displayImage' , $plug->image) }}" alt="Image"
                                                            style="max-width: 100px;">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content">
                                                        {{-- <a href="{{ route('previewSp', ['id' => $plug->id]) }}"
                                                            class="btn btn-success">Preview</a> --}}
                                                        <button type="submit" class="btn btn-warning"
                                                            style="margin-left: 5px;" data-toggle="modal"
                                                            data-target="#editModal{{ $plug->id }}">Edit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            style="margin-left: 5px;"
                                                            onclick="deletePost({{ $plug->id }}, '{{ $plug->judul }}')">
                                                            Delete
                                                        </button>

                                                        <!-- Formulir Penghapusan Tersembunyi -->
                                                        <form id="delete-form-{{ $plug->id }}"
                                                            action="{{ route('destroySp', ['id' => $plug->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </td>
                                                {{-- <td>
                                                    @if ($post->image)
                                                        <img src="{{ asset('storage/' . $post->image) }}"
                                                            alt="Image" style="max-width: 100px;">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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


    @include('pages.diko_sp.plug.modal.create_modal')
    @include('pages.diko_sp.plug.modal.edit_modal')
@endsection
