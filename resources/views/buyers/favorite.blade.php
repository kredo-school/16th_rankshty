@extends('layouts.app')

@section('title','Buyer: Favorite list')

@section('content')
    <div class="pb-2">
        <h2>Favorite List</h2>
    </div>

    <table class="table table-hover border align-middle">
        <thead>
            <tr>
                <th>product</th>
                <th>price</th>
                <th>stock status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse ( $all_favorites as $favorite ) --}}
                <tr>
                    <td>
                        <img src="{{ asset('images/product.png') }}" alt="demo">
                        name
                    </td>
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
            {{-- @empty
                <div class="bg-secondary-subtle">
                    <p>You don't have a favorite product.</p>
                </div>
            @endforelse --}}
        </tbody>
    </table>
@endsection
