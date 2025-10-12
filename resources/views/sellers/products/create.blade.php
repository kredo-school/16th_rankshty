@extends('layouts.app')

@section('title', 'Seller: Create Product')

@section('content')
<div class="container mt-4 col-12">
    <hi class="mx-auto text-center mb-4 fw-bold">Products registration</hi>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('seller.products.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        @csrf

        <div class="mb-3">
            <label for="product_name" class="form-label">Product name<span class="text-danger">*</span></label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ old('product_name') }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Category name<span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">            
        </div>

        <div class="mb-3">
            <lable for="stock_quantity" class="form-label">Quantity<span class="text-danger">*</span></lable>
            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" value="{{ old('stock_quantity') }}">
        </div>

        <div class="mb-3">
            <label for="unit_price" class="form-label">Price per Unit<span class="text-danger">*</span></label>
            <input type="number" step="0.01" name="unit_price" id="unit_price" class="form-control" value="{{ old('unit_price') }}">
        </div>

        <div class="mb-3">
            <label for="product_size" class="form-label">Size<span class="text-danger">*</span></label>
            <select name="product_size" id="product_size" class="form-control">
                <option value="" selected disabled>Choose...</option>
                @foreach(['XS','S','M','L','LL','XL'] as $s)
                    <option value="{{ $s }}" @selected(old('product_size')===$s)>{{ $s }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="product_color" class="form-label">Color<span class="text-danger">*</span></label>
            <input type="text" name="product_color" id="product_color" class="form-control" value="{{ old('product_color') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
            <textarea name="description" id="description" rows="5" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
            <select name="status" id="status" class="form-control">
                <option value="" selected disabled>Choose...</option>
                <option value="1" @selected(old('status')==='1')>published</option>
                <option value="2" @selected(old('status')==='2')>draft</option>
                <option value="3" @selected(old('status')==='3')>archived</option>
            </select>
        </div>

        {{-- 画像（必要に応じて増やす --}}
        <div class="mb-3">
            <label for="picture_1" class="form-label">Main picture</label>
            <input type="file" name="picture_1" id="picture_1" class="form-control">
        </div>

        <div class="text-end">
            <button class="btn btn-primary" type="submit">Post</button>
        </div>
    </form>
</div>
@endsection