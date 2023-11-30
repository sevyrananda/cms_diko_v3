{{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.css">

<!-- Edit Post Modal -->
@foreach ($pricing as $post)
<div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('sppricing.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Pricing SP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_nama_pricingsp">Nama Pricing SP</label>
                        <input type="text" class="form-control" id="edit_nama_pricingsp" name="edit_nama_pricingsp" value="{{ $post->nama_pricingsp }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_harga_pricingsp">Harga Pricing SP</label>
                        <input type="text" class="form-control" id="edit_harga_pricingsp" name="edit_harga_pricingsp" value="{{ $post->harga_pricingsp }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_pricingsp">Deskripsi Pricing SP</label>
                        <div id="dynamicInput_{{ $post->id }}">
                            @foreach($post->deskripsi as $deskripsi)
                            <div class="input-group">
                                <input class="form-control mb-2" name="edit_deskripsi_pricingsp[]" value="{{ $deskripsi->deskripsi }}" required></input>
                                <button type="button" class="btn btn-danger mb-2" onclick="removeEditInput(this)">Remove</button>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block mt-2" onclick="addEditInput({{ $post->id }})">Add More</button>
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
    @foreach ($pricing as $post)
    CKEDITOR.replace('edit_deskripsi_pricingsp_{{ $post->id }}');
    @endforeach
</script>

<script>
    function addEditInput(id) {
        var div = document.createElement('div');
        div.innerHTML = '<div class="input-group"><input class="form-control" name="edit_deskripsi_pricingsp[]" required></input><button type="button" class="btn btn-danger" onclick="removeEditInput(this)">Remove</button></div>';
        document.getElementById('dynamicInput_' + id).appendChild(div);
    }

    function removeEditInput(element) {
        element.parentElement.remove();
    }
</script>
