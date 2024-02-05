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
                            <th class="text-secondary">quantity</th>
                            <th class="text-secondary">subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        {{-- @foreach ( $all_carts as $cart ) --}}
                            <tr>
                                <td>
                                    <img src="{{ asset('images/product.png') }}" alt="demo" class="d-block mx-auto image-lg">
                                </td>
                                <td>name</td>
                                <td>$14.00</td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-outline-secondary btn-fluctuation rounded-start-2" onclick="decrementQuantity()">-</button>
                                        </span>
                                        <input type="text" class="form-control text-center bg-secondary-subtle" value="1" id="quantity" readonly>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-outline-secondary btn-fluctuation rounded-end-2" onclick="incrementQuantity()">+</button>
                                        </span>
                                    </div>
                                </td>
                                <td>$14.00</td>
                                <td>
                                    <button type="#" class="btn btn-link text-secondary text-decoration-none d-flex justify-content-center align-items-center"><i class="fa-regular fa-circle-xmark"></i></button>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-auto">
                <div class="card p-2">
                    <div class="card-header bg-light border-0">
                        <h4 class="fw-bold">Cart Total</h4>
                    </div>
                    <div class="card-body">
                        <span>Subtotal: </span>
                        <span class="fw-bold float-end">$14.00</span>
                        <hr>

                        <span>Shipping: : </span>
                        <span class="fw-bold float-end">Free</span>
                        <hr>

                        <span>Total: </span>
                        <span class="fw-bold float-end">$14.00</span>
                    </div>
                    <div class="card-footer bg-light border-0">
                        <a href="#" class="btn btn-primary  mx-auto d-flex justify-content-center align-items-center">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>

    {{-- @else
        <div>
            <p class="fs-3 text-danger fw-bold mt-3">There are no items in your cart.</p>
        </div>
    @endif --}}

    <script>
        function incrementQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
        }

        function decrementQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        }
    </script>

@endsection
