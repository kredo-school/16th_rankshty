<div class="modal fade" id="subcategoryModalToggle" aria-hidden="true" aria-labelledby="subcategoryModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header">
                <h1 class="modal-title mx-auto" id="subcategoryModalToggleLabel">Sub category</h1>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col text-end">Tops (300)</div>
                    <div class="col text-start">
                        <button class="btn btn-link p-0 btn-modal" style="color: gray" data-bs-target="#subcategoryModalToggle2" data-bs-toggle="modal"><i class="fa-solid fa-xmark-circle"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">Bottoms(100)</div>
                    <div class="col text-start">
                        <button class="btn btn-link p-0 btn-modal" style="color: gray" data-bs-target="#subcategoryModalToggle2" data-bs-toggle="modal"><i class="fa-solid fa-xmark-circle"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">Inner(50)</div>
                    <div class="col text-start">
                        <button class="btn btn-link p-0 btn-modal" style="color: gray" data-bs-target="#subcategoryModalToggle2" data-bs-toggle="modal"><i class="fa-solid fa-xmark-circle"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">Jacket(50)</div>
                    <div class="col text-start">
                        <button class="btn btn-link p-0 btn-modal" style="color: gray" data-bs-target="#subcategoryModalToggle2" data-bs-toggle="modal"><i class="fa-solid fa-xmark-circle"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="Add Subcategory name">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="subcategoryModalToggle2" aria-hidden="true" aria-labelledby="subcategoryModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header">
                <h1 class="modal-title mx-auto" id="subcategoryModalToggleLabel2">Delete Subcategory</h1>
            </div>
            <div class="modal-body">
                <p>Do you want to delete <span class="fw-bold">subcategoryA</span> ?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-target="#subcategoryModalToggle" data-bs-toggle="modal">Back to first</button>
                <form action="#" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
</div>
