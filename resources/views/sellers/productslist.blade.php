@extends('layouts.app')

@section('title', 'Seller: Products list')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Products List</h1>
        <table class="table table-hover align-middle bg-white text-secondary text-center">
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
                @forelse ( $all_products as $product )
                    {{-- @if ( $product->seller_id == Auth::user()->id ) --}}
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                @foreach ( $product->productDetails as $productDetail )
                                    {{ $productDetail->color }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ( $product->productDetails as $productDetail )
                                    {{ $productDetail->size }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ( $product->productDetails as $productDetail )
                                    {{ $productDetail->unit_price }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ( $product->productDetails as $productDetail )
                                    {{ $productDetail->stock_quantity }}
                                @endforeach
                            </td>
                            <td>{{ $product->status }}</td>
                            <td>
                                <a href="#" class="text-decoration-none fw-bold" style="color: #071657">View Details</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link text-decoration-none text-secondary" data-bs-toggle="modal" data-bs-target="#deleteProductModal-{{ $product->id }}">
                                    DELETE
                                </button>
                                @include('sellers.modal.deleteproduct')
                            </td>
                        </tr>
                    {{-- @endif --}}
                @empty
                    <div class="bg-secondary-subtle">
                        <p>You don't have a product.</p>
                    </div>
                @endforelse
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
