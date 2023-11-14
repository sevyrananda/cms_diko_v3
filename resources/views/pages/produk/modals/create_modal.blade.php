<!-- Create Post Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create New Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form for creating a new post goes here -->
                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>

                    <div class="form-group">
                        <label for="preview_selection">Pilih Preview</label>
                        <select class="form-control" id="preview_selection" name="preview_selection">
                            <option value="preview_pos">Layout 1</option>
                            <option value="preview_sp">Layout 2</option>
                        </select>
                    </div>

                    {{-- <div class="form-group">
                        <label for="section">Section 1</label>
                        <select class="form-control" id="section" name="section">
                            <option value="Fitur Utama">Fitur Utama</option>
                            <option value="Fitur Section 1">Fitur Section 1</option>
                            <option value="Fitur Section 2">Fitur Section 2</option>
                        </select>
                    </div> --}}

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Produk</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


