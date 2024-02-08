@extends('layouts.app')

@section('title', 'Product')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/buyer.css') }}">
@endpush

@section('content')
    <div class="row justify-content-center" style="min-width:696px">
        <div class="col">
            <img src="{{ asset('images/Green Capsicum.png') }}" alt="demo" style="width:100%">
            <div class="mt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At, placeat. Nihil aut illum, ex sunt eveniet quasi dolorum odit saepe, praesentium animi dicta quisquam! Provident est ratione neque reprehenderit maxime?
            </div>
        </div>
        <div class="col">
            <h2 class="fw-bold float-start me-3">Product name</h2>
            <div class="badge bg-primary-subtle mt-2" style="color: #071657">In Stock</div>
            <div class="mt-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <span>4 Review</span>
            </div>
            <p class="fs-4 mt-3" style="color: #071657;">$48.00</p>
            <hr>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quisquam atque nostrum exercitationem aperiam quae.</p>

            <div class="row mt-5">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <select name="size" id="size" class="form-select bg-secondary-subtle m-0 w-100">
                                <option value="" hidden>Size</option>
                                <option value="s">S</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="color" id="color" class="form-select bg-secondary-subtle">
                                <option value="" hidden>Color</option>
                                <option value="red">Red</option>
                            </select>
                        </div>
                    </div>

                    <input type="number" name="quantity" id="quantity" class="form-control bg-secondary-subtle mt-2" min="1" step="1" placeholder="Quantity">
                </div>

                <div class="col container">
                    <button type="submit"  class="btn btn-primary d-flex justify-content-center align-items-center mt-4">Add to Cart</button>
                </div>

                <div class="col-1">
                    <button type="button" class="btn btn-warning btn-orange mt-4">
                        <i class="fa-regular fa-heart fa-xl heart-custom"></i>
                    </button>
                </div>
            </div>

            <div class="mt-5">
                <span class="fw-bold">Category: </span><span>Vegetables</span>
            </div>
        </div>
    </div>

@endsection
