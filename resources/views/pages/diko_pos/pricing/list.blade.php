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

                    {{-- Datatables --}}
                    <div class="card">
                        <div class="card-header">
                            <h4>Pricing Produk Layout 1</h4>
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
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($pricings as $p)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $p->nama_pricingpos }}</td>
                                                <td>{{ number_format($p->harga_pricingpos, 0, ',', '.') }}</td>
                                                <td>
                                                    <ul>
                                                        @foreach($p->deskripsi as $deskripsi)
                                                            <li>{{ $deskripsi->deskripsi }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content">
                                                        {{-- <a href="{{ route('pospricing.preview', ['id' => $p->id]) }}"
                                                            class="btn btn-success">Preview</a> --}}
                                                        <button type="submit" class="btn btn-warning"
                                                            style="margin-left: 5px;" data-toggle="modal"
                                                            data-target="#editModal{{ $p->id }}">Edit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            style="margin-left: 5px;"
                                                            onclick="deletePost({{ $p->id }}, '{{ $p->judul }}')">
                                                            Delete
                                                        </button>

                                                        <!-- Formulir Penghapusan Tersembunyi -->
                                                        <form id="delete-form-{{ $p->id }}"
                                                            action="{{ route('pospricing.destroy', ['id' => $p->id]) }}"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function deletePost(id, nama_pricingpos) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete the post with title: "' + nama_pricingpos + '". This action cannot be undone!',
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

<script>
    @foreach ($pricings as $post)
    CKEDITOR.replace('deskripsi-{{ $post->id }}', {
        toolbar: [],
        removeButtons: ''
    });
    @endforeach
</script>

<!-- Create Post Modal -->
@include('pages.diko_pos.pricing.modals.create_modal')
@include('pages.diko_pos.pricing.modals.edit_modal')
@endsection
