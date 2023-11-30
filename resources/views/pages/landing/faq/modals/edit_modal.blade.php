<!-- Edit Post Modal -->
@foreach ($faq as $faq)
<div class="modal fade" id="editModal{{ $faq->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('update', ['id' => $faq->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_question">Question</label>
                        <input type="text" class="form-control" id="edit_question" name="edit_question" value="{{ $faq->question }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_answer">Answer</label>
                        <textarea class="form-control" id="edit_answer" name="edit_answer">{{ $faq->answer }}</textarea>
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
