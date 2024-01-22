@extends('layouts.app')

@section('title','productslist')

@section('content')
    <h2 class="ps-5">Products List</h2>

    <table class="table table-hover text-center align-middle">
        <thead class="table-secondary text-uppercase">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>color</th>
                <th>size</th>
                <th>price</th>
                <th>quantity</th>
                <th>status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse ( $all_products as $product ) --}}
                <tr>
                    <td>1</td>
                    <td>iPhone</td>
                    <td>red</td>
                    <td>mini</td>
                    <td>$10.00</td>
                    <td>200</td>
                    <td>Published</td>
                    <td>
                        <a href="#" class="text-decoration-none fw-bold" style="color: #071657">View Details</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-white text-secondary" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                            DELETE
                        </button>
                        @include('sellers.modal.deleteproduct')
                    </td>
                </tr>
            {{-- @empty
                <div class="bg-secondary-subtle">
                    <p>You don't have a product.</p>
                </div>
            @endforelse --}}
        </tbody>
    </table>
    {{-- paginate(10) image --}}
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link hover" href="#">2</a></li>
            <li class="page-item"><a class="page-link focus" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link page-arrow" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
