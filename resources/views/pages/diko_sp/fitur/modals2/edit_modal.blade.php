<!-- Edit Post Modal -->
@foreach ($fitur2 as $sp2)
<div class="modal fade" id="editModal{{ $sp2->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('sp.fitur2.update', ['id' => $sp2->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Fitur Section 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_icon2">Icon2</label>
                        <select id="editIconSelector" class="form-control" name="edit_icon2">
                            <option value="{{ $sp2->icon2 }}" selected disabled>{{ $sp2->icon2 }}</option>
                            <option value="bi bi-search">bi bi-search</option>
                            <option value="bi bi-arrow-down-up">bi bi-arrow-down-up</option>
                            <option value="bi bi-bar-chart">bi bi-bar-chart</option>
                            <option value="bi bi-bounding-box-circles">bi bi-bounding-box-circles</option>
                            <option value="bi bi-calendar4-week">bi bi-calendar4-week</option>
                            <option value="bi bi-chat-square-text">bi bi-chat-square-text</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_judul_icon2">Judul Icon2</label>
                        <input type="text" class="form-control" id="edit_judul_icon2" name="edit_judul_icon2" value="{{ $sp2->judul_icon2 }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_isi">Isi</label>
                        <textarea class="form-control" id="edit_isi" name="edit_isi">{{ $sp2->isi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Image</label>
                        <input type="file" class="form-control" id="edit_image" name="edit_image">
                        @if ($sp2->image)
                            <div style="display: flex; align-items: center;">
                                <img src="{{ route('image.displayImage' , $sp2->image) }}" alt="Image" style="max-width: 100px; margin-right: 10px;">
                                <p>Nama File: {{ $sp2->image }}</p>
                            </div>
                        @else
                            No Image
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Mendapatkan elemen-elemen yang diperlukan
    var editIconSelector = document.getElementById('editIconSelector');
    var editIconPreview = document.getElementById('editIconPreview');
    var editJudulPreview = document.getElementById('editJudulPreview');
    var editIsiPreview = document.getElementById('editIsiPreview');

    // Mengatur ikon awal saat modal pengeditan dibuka
    editIconPreview.className = 'bi ' + '{{ $sp2->icon2 }}';

    // Mendengarkan perubahan dalam elemen <select> pada modal pengeditan
    editIconSelector.addEventListener('change', function () {
        var selectedValue = editIconSelector.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        editIconPreview.className = 'bi ' + selectedValue;
    });
</script>
@endforeach
