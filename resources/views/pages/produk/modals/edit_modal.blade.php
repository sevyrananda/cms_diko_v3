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


                    <div class="form-group">
                        <label for="edit_preview_selection">Edit Preview Selection</label>
                        <select class="form-control" id="edit_preview_selection" name="edit_preview_selection">
                            <option value="preview_pos" @if($product->preview_selection == 'preview_pos') selected @endif>Layout 1 (preview_pos)</option>
                            <option value="preview_sp" @if($product->preview_selection == 'preview_sp') selected @endif>Layout 2 (preview_sp)</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endforeach
