@extends('layouts.app')

@section('title', 'Product')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/buyer.css') }}">
@endpush

@section('content')
    <div class="row justify-content-center" style="min-width:696px">
        <div class="col">
            <img src="{{ $product->image_1 }}" alt="{{ $product->name }}" style="width:100%">
            <div class="mt-2">
                {{ $product->description }}
            </div>
        </div>
        <div class="col px-5">
            <h2 class="fw-bold">{{ $product->product_name }}</h2>
            <a href="{{ route('reviews') }}" class="mt-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <span>4 Review</span>
            </a>
            @foreach ( $product->productDetails as $productDetail )
                <p class="fs-4 mt-3" style="color: #071657;">$ {{ $productDetail->unit_price }}</p>
            @endforeach

            <hr>

            <form action="{{ route('buyer.cart.store') }}" method="post">
                @csrf
                <div class="row mt-5">
                    <div class="col">
                        <select name="detail" id="detail" class="form-select bg-secondary-subtle m-0 w-100">
                            <option value="" hidden>Size,Color</option>
                            @foreach ( $product->productDetails as $productDetail )
                                <option value="{{ $productDetail->id }}">{{ $productDetail->size }} , {{ $productDetail->color }}</option>
                            @endforeach
                        </select>
                        @error('detail')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col">
                        <input type="number" name="quantity" id="quantity" class="form-control bg-secondary-subtle" min="1" step="1" placeholder="Quantity">
                        @error('quantity')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                <div class="row">
                    <div class="col">
                        <button type="submit"  class="btn btn-primary d-flex justify-content-center align-items-center mt-4">Add to Cart</button>
                    </div>

                    <div class="col">
                        <form action="#" method="post">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-orange mt-4">
                                <i class="fa-regular fa-heart fa-xl heart-custom"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </form>

            {{-- <div class="mt-5">
                <span class="fw-bold">Category: </span>
                @foreach ( $product->category_products as $category_product)
                    <span>{{ $category_product->category->name }}</span>
                @endforeach
            </div> --}}
        </div>
    </div>
    <div class="mt-5">
        <div class="row mb-4">
            <div class="col">
                <img src="{{ $product->image_2 }}" alt="{{ $product->name }}" style="width:100%">
            </div>
            <div class="col">
                <img src="{{ $product->image_3 }}" alt="{{ $product->name }}" style="width:100%">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="{{ $product->image_4 }}" alt="{{ $product->name }}" style="width:100%">
            </div>
            <div class="col">
                <img src="{{ $product->image_5 }}" alt="{{ $product->name }}" style="width:100%">
            </div>
        </div>
    </div>

@endsection
