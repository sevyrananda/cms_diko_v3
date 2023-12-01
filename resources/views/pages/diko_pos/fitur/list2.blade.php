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

                        {{-- Fitur Section 2 --}}
                        {{-- <div class="card">
                            <div class="card-header">
                                <h4>Fitur Section 2</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <!-- Button to trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#createModal2"><i class="fas fa-plus"></i>
                                        Create New Fitur Section 2
                                    </button>
                                    <a href="{{ route('pos.fitur2.preview') }}" class="btn btn-success"><i
                                            class="fas fa-eye"></i>
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
                                                <th>Icon2</th>
                                                <th>Judul Icon2</th>
                                                <th>Isi</th>
                                                <th>Image</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($posts as $pos2)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $pos2->icon2 }}</td>
                                                    <td>{{ $pos2->judul_icon2 }}</td>
                                                    <td>{{ $pos2->isi }}</td>
                                                    <td>
                                                        @if ($pos2->image)
                                                            <img src="{{ asset('storage/' . $pos2->image) }}" alt="Image"
                                                                style="max-width: 100px;">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content">
                                                            <a href="{{ route('pos.fitur2.preview', ['id' => $pos2->id]) }}"
                                                                class="btn btn-primary">Preview</a>
                                                            <button type="submit" class="btn btn-warning"
                                                                style="margin-left: 5px;" data-toggle="modal"
                                                                data-target="#editModal{{ $pos2->id }}">Edit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                style="margin-left: 5px;"
                                                                onclick="deletePost2({{ $pos2->id }}, '{{ $pos2->judul }}')">
                                                                Delete
                                                            </button>

                                                            <!-- Formulir Penghapusan Tersembunyi -->
                                                            <form id="delete-form-{{ $pos2->id }}"
                                                                action="{{ route('pos.fitur2.destroy', ['id' => $pos2->id]) }}"
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
                        </div> --}}

                        {{-- Datatables --}}
                        <div class="card">
                            <div class="card-header">
                                <h4>Fitur Section 2 Layout 1</h4>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#createModal2"><i class="fas fa-plus"></i>
                                        Create New
                                    </button>
                                {{-- <a href="{{ route('pos.fitur2.preview') }}" class="btn btn-success"><i
                                        class="fas fa-eye"></i>Preview</a> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Icon</th>
                                                <th class="text-center">Judul Icon</th>
                                                <th class="text-center">Isi</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($posts as $pos2)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $pos2->icon2 }}</td>
                                                    <td>{{ $pos2->judul_icon2 }}</td>
                                                    <td>{{ $pos2->isi }}</td>
                                                    <td>
                                                        @if ($pos2->image)
                                                            <img src="{{ route('image.displayImage' , $pos2->image) }}"
                                                                alt="Image" style="max-width: 100px;">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content">
                                                            <button type="submit" class="btn btn-warning"
                                                                style="margin-left: 5px;" data-toggle="modal"
                                                                data-target="#editModal{{ $pos2->id }}">Edit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                style="margin-left: 5px;"
                                                                onclick="deletePost({{ $pos2->id }}, '{{ $pos2->judul }}')">
                                                                Delete
                                                            </button>

                                                            <!-- Formulir Penghapusan Tersembunyi -->
                                                            <form id="delete-form-{{ $pos2->id }}"
                                                                action="{{ route('pos.fitur2.destroy', ['id' => $pos2->id]) }}"
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
    <script>
        function deletePost2(id, judul) {
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
    @include('pages.diko_pos.fitur.modals2.create_modal')
    @include('pages.diko_pos.fitur.modals2.edit_modal')
@endsection
