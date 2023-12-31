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
                                <h4>Faq Landing</h4>
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
                                                <th class="text-center">Question</th>
                                                <th class="text-center">Answer</th>
                                                <th class="text-center">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($faq as $f)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $f->question }}</td>
                                                    <td>{{ $f->answer }}
                                                    <td>
                                                        <div class="d-flex justify-content">

                                                            {{-- <a href="{{ route('faq.preview', ['id' => $f->id]) }}" class="btn btn-primary">Show</a> --}}
                                                            <button type="submit" class="btn btn-warning"
                                                                style="margin-left: 10px;" data-toggle="modal"
                                                                data-target="#editModal{{ $f->id }}">Edit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                style="margin-left: 10px;"
                                                                onclick="deletePost({{ $f->id }}, '{{ $f->name }}')">
                                                                Delete
                                                            </button>

                                                            <!-- Formulir Penghapusan Tersembunyi -->
                                                            <form id="delete-form-{{ $f->id }}"
                                                                action="{{ route('destroy', ['id' => $f->id]) }}"
                                                                method="POST">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function deletePost(id, question) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to delete the post with title: "' + question +
                    '". This action cannot be undone!',
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
    @include('pages.landing.faq.modals.create_modal')
    @include('pages.landing.faq.modals.edit_modal')
@endsection
