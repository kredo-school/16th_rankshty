<!-- Modal -->
<div class="modal fade" id="deleteCategpryModal" tabindex="-1" aria-labelledby="deleteCategpryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header mx-auto">
                <h1 class="modal-title" id="deleteCategpryModalLabel">Delete Category</h1>
            </div>
            <div class="modal-body">
                <span>Do you want to delete <span class="fw-bold">CategoryA</span> ?</span>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="#" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger rounded-pill px-4">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
