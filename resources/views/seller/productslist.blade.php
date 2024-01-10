@extends('layouts.app')

@section('title','productslist')

@section('content')
    <div class="pb-2">
        <h2>Products List</h2>
    </div>

    <table class="table table-hover border align-middle">
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
                        @include('seller.modal.deleteproduct')
                    </td>
                </tr>
            {{-- @empty
                <div class="bg-secondary-subtle">
                    <p>You don't have a product.</p>
                </div>
            @endforelse --}}
        </tbody>
    </table>
@endsection
