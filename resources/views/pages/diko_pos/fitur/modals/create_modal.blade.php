<!-- Create Post Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create New Fitur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form for creating a new post goes here -->
                <form action="{{ route('pos.fitur.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="icon1">Icon1</label>
                        <select id="selectedIcon1" class="form-control" name="icon1">
                            <option value="bi bi-currency-exchange">bi bi-currency-exchange</option>
                            <option value="bi bi-credit-card-2-back">bi bi-credit-card-2-back</option>
                            <option value="bi bi-cloud-check">bi bi-cloud-check</option>
                            <option value="bi bi-shield-check">bi bi-shield-check</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_icon1">Judul Icon1</label>
                        <input type="text" class="form-control" id="judul_icon1" name="judul_icon1" required>
                    </div>
                    <div class="form-group">
                        <label for="judul_detail">Judul Detail</label>
                        <input type="text" class="form-control" id="judul_detail" name="judul_detail" required>
                    </div>
                    <div class="form-group">
                        <label for="isi_detail">Isi Detail</label>
                        <input type="text" class="form-control" id="isi_detail" name="isi_detail" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Fitur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Mendapatkan elemen-elemen yang diperlukan
    var iconSelector1 = document.getElementById('icon1');
    var selectedIcon1 = document.getElementById('selectedIcon1');

    // Mendengarkan perubahan dalam elemen <select>
    iconSelector1.addEventListener('change', function () {
        var selectedValue1 = iconSelector1.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        selectedIcon1.innerHTML = '<i class="' + selectedValue1 + '"></i>';
    });
</script>
