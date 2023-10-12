<!-- Edit Post Modal -->
@foreach ($posts as $post)
<div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('landing.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
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
                        <label for="edit_judul">Judul</label>
                        <input type="text" class="form-control" id="edit_judul" name="edit_judul" value="{{ $post->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_isi">Isi</label>
                        <input type="text" class="form-control" id="edit_isi" name="edit_isi" value="{{ $post->isi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_icon">Pilih Ikon:</label>
                        <select id="editIconSelector" class="form-control" name="edit_icon">
                            <option value="{{ $post->icon }}" selected disabled>{{ $post->icon }}</option>
                            <option value="bi-currency-exchange">bi-currency-exchange</option>
                            <option value="bi-credit-card-2-back">bi-credit-card-2-back</option>
                            <option value="bi-cloud-check">bi-cloud-check</option>
                            <option value="bi-shield-check">bi-shield-check</option>
                        </select>
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
    editIconPreview.className = 'bi ' + '{{ $post->icon }}';

    // Mendengarkan perubahan dalam elemen <select> pada modal pengeditan
    editIconSelector.addEventListener('change', function () {
        var selectedValue = editIconSelector.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        editIconPreview.className = 'bi ' + selectedValue;
    });
</script>

@endforeach
