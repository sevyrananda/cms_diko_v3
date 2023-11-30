<!-- Edit Post Modal -->
@foreach ($posts as $pos)
<div class="modal fade" id="editModal{{ $pos->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pos.fitur.update', ['id' => $pos->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Fitur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_icon1">Icon1</label>
                        <select id="editIconSelector" class="form-control" name="edit_icon1">
                            <option value="{{ $pos->icon1 }}" selected disabled>{{ $pos->icon1 }}</option>
                            <option value="bi bi-cash-coin">bi bi-cash-coin</option>
                            <option value="bi bi-shield-check">bi bi-shield-check</option>
                            <option value="bi bi-binoculars">bi bi-binoculars</option>
                            <option value="bi bi-clock-history">bi bi-clock-history</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_judul_icon1">Judul Icon1</label>
                        <input type="text" class="form-control" id="edit_judul_icon1" name="edit_judul_icon1" value="{{ $pos->judul_icon1 }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_judul_detail">Judul Detail</label>
                        <input type="text" class="form-control" id="edit_judul_detail" name="edit_judul_detail" value="{{ $pos->judul_detail }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_isi_detail">Isi Detail</label>
                        <textarea class="form-control" id="edit_isi_detail" name="edit_isi_detail">{{ $pos->isi_detail }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Image</label>
                        <input type="file" class="form-control" id="edit_image" name="edit_image">
                        @if ($pos->image)
                            <div style="display: flex; align-items: center;">
                                <img src="{{ asset('storage/' . $pos->image) }}" alt="Image" style="max-width: 100px; margin-right: 10px;">
                                <p>Nama File: {{ $pos->image }}</p>
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
    editIconPreview.className = 'bi ' + '{{ $pos->icon1 }}';

    // Mendengarkan perubahan dalam elemen <select> pada modal pengeditan
    editIconSelector.addEventListener('change', function () {
        var selectedValue = editIconSelector.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        editIconPreview.className = 'bi ' + selectedValue;
    });
</script>

@endforeach
