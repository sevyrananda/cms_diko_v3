<!-- Edit Post Modal -->
@foreach ($products as $product)
<div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('produk.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="edit_nama_produk" name="edit_nama_produk" value="{{ $product->nama_produk }}">
                    </div>
                    {{-- <div class="form-group">
                        <label for="edit_section">Pilih Section</label>
                        <select id="editSectionSelector" class="form-control" name="edit_section">
                            <option value="{{ $product->section }}" selected disabled>{{ $product->section }}</option>
                            <option value="Fitur Utama">Fitur Utama</option>
                            <option value="Fitur Section 1">Fitur Section 1</option>
                            <option value="Fitur Section 2">Fitur Section 2</option>
                        </select>
                    </div> --}}
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
    var editSectionSelector = document.getElementById('editSectionSelector');

    // Mendengarkan perubahan dalam elemen <select> pada modal pengeditan
    editSectionSelector.addEventListener('change', function () {
        var selectedValue = editSectionSelector.value; // Mendapatkan nilai yang dipilih

    });
</script>
@endforeach
