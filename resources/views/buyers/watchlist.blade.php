@extends('layouts.app')

@section('title','Buyer: Watch list')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/buyer.css') }}">
@endpush

@section('content')
    <div class="pb-2 text-center">
        <h2 class="fw-bold">My Watchlist</h2>
    </div>

    <table class="table table-hover border align-middle text-center">
        <thead class="text-uppercase">
            <tr>
                <th colspan="2" class="text-secondary">product</th>
                <th class="text-secondary">price</th>
                <th class="text-secondary">stock status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse ( $all_favorites as $favorite ) --}}
                <tr>
                    <td>
                        <img src="{{ asset('images/product.png') }}" alt="demo" class="d-block mx-auto image-lg">
                    </td>
                    <td>name</td>
                    <td>$10.00</td>
                    <td>
                        <div class="badge bg-primary-subtle p-2" style="color: #071657">In Stock</div>
                        <div class="badge bg-danger-subtle text-danger p-2">Out of Stock</div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center">Add to Cart</a>
                        <a class="btn btn-secondary disabled d-flex justify-content-center align-items-center" aria-disabled="true">Add to Cart</a>
                    </td>
                    <td>
                        <button type="#" class="btn btn-link text-secondary p-0"><i class="fa-regular fa-circle-xmark"></i></button>
                    </td>
                </tr>
            {{-- @empty
                <div class="bg-secondary-subtle">
                    <p>You don't have a favorite product.</p>
                </div>
            @endforelse --}}
        </tbody>
    </table>
@endsection
