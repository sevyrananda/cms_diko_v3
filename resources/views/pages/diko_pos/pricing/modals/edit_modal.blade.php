{{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.css">

<!-- Edit Post Modal -->
@foreach ($pricings as $post)
<div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pospricing.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Pricing POS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_nama_pricingpos">Nama Pricing POS</label>
                        <input type="text" class="form-control" id="edit_nama_pricingpos" name="edit_nama_pricingpos" value="{{ $post->nama_pricingpos }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_harga_pricingpos">Harga Pricing POS</label>
                        <input type="text" class="form-control" id="edit_harga_pricingpos" name="edit_harga_pricingpos" value="{{ $post->harga_pricingpos }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_pricingpos">Deskripsi Pricing POS</label>
                        <div id="dynamicInput_{{ $post->id }}">
                            @foreach($post->deskripsi as $deskripsi)
                            <div class="input-group">
                                <input class="form-control" name="edit_deskripsi_pricingpos[]" value="{{ $deskripsi->deskripsi }}" required></input>
                                <button type="button" class="btn btn-danger" onclick="removeEditInput(this)">Remove</button>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" onclick="addEditInput({{ $post->id }})">Add More</button>
                        </div>
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
@endforeach

<script>
    @foreach ($pricings as $post)
    CKEDITOR.replace('edit_deskripsi_pricingpos_{{ $post->id }}');
    @endforeach
</script>

<script>
    function addEditInput(id) {
        var div = document.createElement('div');
        div.innerHTML = '<div class="input-group"><input class="form-control" name="edit_deskripsi_pricingpos[]" required></input><button type="button" class="btn btn-danger" onclick="removeEditInput(this)">Remove</button></div>';
        document.getElementById('dynamicInput_' + id).appendChild(div);
    }

    function removeEditInput(element) {
        element.parentElement.remove();
    }
</script>
