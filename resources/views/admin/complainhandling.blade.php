@extends('layouts.app')

@section('title', 'Admin: Complain handling')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Complain handling</h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary text-uppercase">
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

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation usermanagement">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link border disabled" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item checked"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link border" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
