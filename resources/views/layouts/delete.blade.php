
<button type="button" class="btn btn-danger ml-auto" data-toggle="modal" data-target="#deleteModal-{{ $id }}">
    Delete
</button>

<div class="modal fade" id="deleteModal-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Alert!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ $url }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
