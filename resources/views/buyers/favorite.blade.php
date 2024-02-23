@extends('layouts.app')

@section('title','Buyer: Favorite list')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/buyer.css') }}">
@endpush

@section('content')
    <div class="pb-2">
        <h2>Favorite List</h2>
    </div>

    <table class="table table-hover border align-middle">
        <thead class="table-info text-uppercase">
            <tr>
                <th>image</th>
                <th>name</th>
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
                        <img src="{{ asset('images/product.png') }}" alt="demo" class="d-block mx-auto image-lg">
                    </td>
                    <td>demo</td>
                    <td>$10.00</td>
                    <td>
                        <div class="badge bg-primary-subtle" style="color: #071657">In Stock</div>
                        <div class="badge bg-danger-subtle text-danger">Out of Stock</div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center">Purchase</a>
                        {{-- <a class="btn btn-secondary disabled d-flex justify-content-center align-items-center" aria-disabled="true">Purchase</a> --}}
                    </td>
                    <td>
                        <form action="#" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-link text-black"><i class="fa-regular fa-circle-xmark"></i></button>
                        </form>
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
