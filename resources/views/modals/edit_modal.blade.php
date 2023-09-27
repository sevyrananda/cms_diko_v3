<!-- Edit Post Modal -->
@foreach ($posts as $post)
<div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_author_name">Author Name</label>
                        <input type="text" class="form-control" id="edit_author_name" name="edit_author_name" value="{{ $post->author_name }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title">Title</label>
                        <input type="text" class="form-control" id="edit_title" name="edit_title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_category">Category</label>
                        <select class="form-control" id="edit_category" name="edit_category">
                            <option value="News" {{ $post->category == 'news' ? 'selected' : '' }}>News</option>
                            <option value="Info" {{ $post->category == 'info' ? 'selected' : '' }}>Info</option>
                            <option value="Technology" {{ $post->category == 'technology' ? 'selected' : '' }}>Technology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_content">Content</label>
                        <textarea class="form-control" id="edit_content" name="edit_content">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Image</label>
                        <input type="file" class="form-control-file" id="edit_image" name="edit_image">
                        @if ($post->image)
                            <div style="display: flex; align-items: center;">
                                {{-- <img src="{{ asset('storage/' . $post->image) }}" alt="Image" style="max-width: 100px; margin-right: 10px;"> --}}
                                <p>Nama File: {{ $post->image }}</p>
                            </div>
                        @else
                            No Image
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="edit_status">Status</label>
                        <select class="form-control" id="edit_status" name="edit_status">
                            <option value="Published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="Draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="Pending" {{ $post->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        </select>
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
