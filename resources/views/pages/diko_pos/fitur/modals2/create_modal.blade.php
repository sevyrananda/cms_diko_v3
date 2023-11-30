<!-- Create Post Modal -->
<div class="modal fade" id="createModal2" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create New Fitur Section 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form for creating a new post goes here -->
                <form action="{{ route('pos.fitur2.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="icon2">Icon2</label>
                        <select id="selectedIcon2" class="form-control" name="icon2">
                            <option value="bi bi-search">bi bi-search</option>
                            <option value="bi bi-arrow-down-up">bi bi-arrow-down-up</option>
                            <option value="bi bi-bar-chart">bi bi-bar-chart</option>
                            <option value="bi bi-bounding-box-circles">bi bi-bounding-box-circles</option>
                            <option value="bi bi-calendar4-week">bi bi-calendar4-week</option>
                            <option value="bi bi-chat-square-text">bi bi-chat-square-text</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_icon2">Judul Icon2</label>
                        <input type="text" class="form-control" id="judul_icon2" name="judul_icon2" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control" id="isi" name="isi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
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
