@extends('layouts.app')

@section('title', 'Seller: Draft list')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Draft List</h1>
        <table class="table table-hover align-middle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary text-uppercase">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>category</th>
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
                                    {{ $productDetail->unit_price }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ( $product->category_products as $category_product )
                                    @if($category_product->category)
                                        {{ $category_product->category->name }}
                                    @endif
                                @endforeach
                                {{-- <br>
                                <div class="badge bg-secondary-subtle text-dark">Xmas</div> --}}
                            </td>
                            <td>
                                <a href="#" class="text-decoration-none fw-bold" style="color: #071657">View Details</a>
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
