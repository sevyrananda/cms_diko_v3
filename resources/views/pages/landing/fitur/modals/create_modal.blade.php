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
                <form action="{{ route('landing.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control" id="isi" name="isi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="icon">Pilih Ikon:</label>
                        <select id="selectedIcon" class="form-control" name="icon">
                            <option value="bi bi-currency-exchange">bi bi-currency-exchange</option>
                            <option value="bi bi-credit-card-2-back">bi bi-credit-card-2-back</option>
                            <option value="bi bi-cloud-check">bi bi-cloud-check</option>
                            <option value="bi bi-shield-check">bi bi-shield-check</option>
                        </select>
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
    var iconSelector = document.getElementById('icon');
    var selectedIcon = document.getElementById('selectedIcon');

    // Mendengarkan perubahan dalam elemen <select>
    iconSelector.addEventListener('change', function () {
        var selectedValue = iconSelector.value; // Mendapatkan nilai yang dipilih

        // Mengganti ikon yang ditampilkan sesuai dengan nilai yang dipilih
        selectedIcon.innerHTML = '<i class="' + selectedValue + '"></i>';
    });
</script>

