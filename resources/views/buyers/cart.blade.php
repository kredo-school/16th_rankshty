@extends('layouts.app')

@section('title','Buyer: Shopping Cart')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/buyer.css') }}">
@endpush

@section('content')
    <div class="pb-2">
        <h2 class="fw-bold">My Shopping Cart</h2>
    </div>

    {{-- @if () --}}
        <div class="row">
            <div class="col">
                <table class="table table-hover border align-middle">
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
                        {{-- @foreach ( $all_carts as $cart ) --}}
                            <tr>
                                <td>
                                    <img src="{{ asset('images/product.png') }}" alt="demo" class="d-block mx-auto image-lg">
                                </td>
                                <td>name</td>
                                <td>$10.00</td>
                                <td>
                                    <div class="badge bg-primary-subtle" style="color: #071657">In Stock</div>
                                    <div class="badge bg-danger-subtle text-danger">Out of Stock</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-dark btn-sm rounded-pill px-4" style="background-color: #071657">Purchase</a>
                                    <a class="btn btn-secondary btn-sm rounded-pill px-4 disabled" aria-disabled="true">Purchase</a>
                                </td>
                                <td>
                                    <button type="#" class="btn"><i class="fa-regular fa-circle-xmark"></i></button>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">Cart Total</div>
                    <div class="card-body">
                        <span>Subtotal: </span>
                        <span class="fw-bold">$84.00</span>
                        <hr>

                        <span>Shipping: : </span>
                        <span class="fw-bold">Free</span>
                        <hr>

                        <span>Total: </span>
                        <span class="fw-bold">$84.00</span>

                    </div>
                </div>
            </div>
        </div>

    {{-- {{-- @else --}}
        <div>
            <p class="fs-3 text-danger fw-bold">There are no items in your cart.</p>
        </div>
    {{-- @endif --}}

@endsection
