@extends('layouts.app')

@section('title', 'Seller: Ranking')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/seller.css') }}">
@endpush

@section('content')
    <div class="justify-content-center rounded" style="min-width:696px">
        <div class="row mb-4">
            <div class="col">
                <span>Average Monthly Sales</span>
                <p class="display-6">1,461</p>
            </div>
            <div class="col">
                <span>Average Sales Rank</span>
                <p class="display-6">11,239</p>
            </div>
            <div class="col">
                <span>Average Price</span>
                <p class="display-6">$16.77</p>
            </div>
            <div class="col">
                <span>Average Rating Number</span>
                <p class="display-6">1,663</p>
            </div>
        </div>

        <table class="table table-hover table-striped align-middle bg-white text-secondary text-center">
            <thead class="small text-secondary text-uppercase">
                <tr>
                    <th>id</th>
                    <th colspan="2">product</th>
                    <th>category</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>revenue</th>
                    <th>date first available</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ( $all_products as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <img src="{{ $product->image_1 }}" alt="{{ $product->product_name }}" style="width: 100%">
                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>PCs</td>
                        <td>10</td>
                        <td>$1.65</td>
                        <td>$1.00</td>
                        <td>{{ date('M d, Y', strtotime($product->created_at)) }}</td>
                    </tr>
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
