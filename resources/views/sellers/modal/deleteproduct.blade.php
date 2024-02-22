<!-- Modal -->
<div class="modal fade" id="deleteProductModal-{{ $product->id }}" tabindex="-1" aria-labelledby="deleteProductModal-{{ $product->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header mx-auto">
                <h1 class="modal-title" id="deleteProductModal-{{ $product->id }}Label">Delete Product</h1>
            </div>
            <div class="modal-body">
                <span>Do you want to delete <span class="fw-bold">-{{ $product->product_name }}</span> ?</span>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="{{ route('seller.productslist.delete',$product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger rounded-pill px-4">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
