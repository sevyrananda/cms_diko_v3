<!-- Edit Post Modal -->
@foreach ($posts as $pos2)
<div class="modal fade" id="editModal{{ $pos2->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pos.fitur2.update', ['id' => $pos2->id]) }}" method="POST" enctype="multipart/form-data">
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
                            <option value="{{ $pos2->icon2 }}" selected disabled>{{ $pos2->icon2 }}</option>
                            <option value="bi bi-currency-exchange">bi bi-currency-exchange</option>
                            <option value="bi bi-credit-card-2-back">bi bi-credit-card-2-back</option>
                            <option value="bi bi-cloud-check">bi bi-cloud-check</option>
                            <option value="bi bi-shield-check">bi bi-shield-check</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_judul_icon2">Judul Icon2</label>
                        <input type="text" class="form-control" id="edit_judul_icon2" name="edit_judul_icon2" value="{{ $pos2->judul_icon2 }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_isi">Isi</label>
                        <input type="text" class="form-control" id="edit_isi" name="edit_isi" value="{{ $pos2->isi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Image</label>
                        <input type="file" class="form-control-file" id="edit_image" name="edit_image">
                        @if ($pos2->image)
                            <div style="display: flex; align-items: center;">
                                <img src="{{ asset('storage/' . $pos2->image) }}" alt="Image" style="max-width: 100px; margin-right: 10px;">
                                <p>Nama File: {{ $pos2->image }}</p>
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
    editIconPreview.className = 'bi ' + '{{ $pos2->icon2 }}';

    // Mendengarkan perubahan dalam elemen <select> pada modal pengeditan
    editIconSelector.addEventListener('change', function () {
        var selectedValue = editIconSelector.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        editIconPreview.className = 'bi ' + selectedValue;
    });
</script>
@endforeach
