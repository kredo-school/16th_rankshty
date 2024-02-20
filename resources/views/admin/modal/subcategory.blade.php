<div class="modal fade" id="subcategory-{{ $main_category->id }}" aria-hidden="true" aria-labelledby="subcategory-{{ $main_category->id }}Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header">
                <h1 class="modal-title mx-auto" id="subcategory-{{ $main_category->id }}Label">Sub category</h1>
                </div>
            <div class="modal-body">
                @foreach ( $all_sub_categories as $sub_category)
                    <div class="row">
                        <div class="col text-end">{{ $sub_category->name }}</div>
                        <div class="col text-start">
                            <button class="btn btn-link p-0 btn-modal" style="color: gray" data-bs-target="#delete-{{ $sub_category->id }}" data-bs-toggle="modal"><i class="fa-solid fa-xmark-circle"></i></button>
                        </div>
                    </div>
                @endforeach
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
<div class="modal fade" id="delete-{{ $sub_category->id }}" aria-hidden="true" aria-labelledby="delete-{{ $sub_category->id }}Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header">
                <h1 class="modal-title mx-auto" id="delete-{{ $sub_category->id }}Label">Delete Subcategory</h1>
            </div>
            <div class="modal-body">
                <p>Do you want to delete <span class="fw-bold">{{ $sub_category->name }}</span> ?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-target="#subcategory-{{ $main_category->id }}" data-bs-toggle="modal">Back to first</button>
                <form action="#" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
</div>
