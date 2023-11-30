{{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.css">

<!-- Create Post Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create New Pricing SP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form for creating a new post goes here -->
                <form action="{{ route('sppricing.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pricingsp">Nama Pricing SP</label>
                        <input type="text" class="form-control" id="nama_pricingsp" name="nama_pricingsp" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_pricingsp">Harga Pricing SP</label>
                        <input type="text" class="form-control" id="harga_pricingsp" name="harga_pricingsp" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_pricingsp">Deskripsi Pricing SP</label>
                        <div id="dynamicInput">
                            <div class="input-group">
                                <input class="form-control mb-2" name="deskripsi_pricingsp[]" required></input>
                                <button type="button" class="btn btn-danger mb-2" onclick="removeInput(this)">Remove</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-block mt-2" onclick="addInput()">Add More</button>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Pricing SP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    CKEDITOR.replace('deskripsi_pricingsp');
</script>

<script>
    var i = 1;

    function addInput() {
        var div = document.createElement('div');
        div.innerHTML = '<div class="input-group"><input class="form-control mb-1" name="deskripsi_pricingsp[]" required></input><button type="button" class="btn btn-danger mb-1" onclick="removeInput(this)">Remove</button></div>';
        document.getElementById('dynamicInput').appendChild(div);
        i++;
    }

    function removeInput(element) {
        element.parentElement.remove(); // Remove the entire input group
    }
</script>
