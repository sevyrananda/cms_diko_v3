<!-- Edit Post Modal -->
@foreach ($fitur as $sp)
<div class="modal fade" id="editModal{{ $sp->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('sp.fitur.update', ['id' => $sp->id]) }}" method="POST" enctype="multipart/form-data">
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
                            <option value="{{ $sp->icon1 }}" selected disabled>{{ $sp->icon1 }}</option>
                            <option value="bi bi-currency-exchange">bi bi-currency-exchange</option>
                            <option value="bi bi-credit-card-2-back">bi bi-credit-card-2-back</option>
                            <option value="bi bi-cloud-check">bi bi-cloud-check</option>
                            <option value="bi bi-shield-check">bi bi-shield-check</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_judul_icon1">Judul Icon1</label>
                        <input type="text" class="form-control" id="edit_judul_icon1" name="edit_judul_icon1" value="{{ $sp->judul_icon1 }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_judul_detail">Judul Detail</label>
                        <input type="text" class="form-control" id="edit_judul_detail" name="edit_judul_detail" value="{{ $sp->judul_detail }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_isi_detail">Isi Detail</label>
                        <input type="text" class="form-control" id="edit_isi_detail" name="edit_isi_detail" value="{{ $sp->isi_detail }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Image</label>
                        <input type="file" class="form-control-file" id="edit_image" name="edit_image">
                        @if ($sp->image)
                            <div style="display: flex; align-items: center;">
                                <img src="{{ asset('storage/' . $sp->image) }}" alt="Image" style="max-width: 100px; margin-right: 10px;">
                                <p>Nama File: {{ $sp->image }}</p>
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
    editIconPreview.className = 'bi ' + '{{ $sp->icon1 }}';

    // Mendengarkan perubahan dalam elemen <select> pada modal pengeditan
    editIconSelector.addEventListener('change', function () {
        var selectedValue = editIconSelector.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        editIconPreview.className = 'bi ' + selectedValue;
    });
</script>

@endforeach
