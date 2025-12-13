@extends('layouts.app')

@section('title','Seller: Products list')

@section('content')
<div class="justify-content-center rounded border" style="min-width:696px">
<h1 class="ps-3 mt-2">Products List</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="text-end mb-2 me-2">
    <a href="{{ route('seller.products.create') }}" class="btn btn-primary">New Product</a>
</div>

<div class="table-responsive">
    <table class="table table-hover align-middle bg-white text-secondary text-center">
        <thead class="small table-secondary text-secondary text-uppercase">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>color</th>
                <th>size</th>
                <th>price</th>
                <th>quantity</th>
                <th>status</th>
                <th>image</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
        @forelse($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->details->product_color ?? '-'}}</td>
            <td>{{ $product->details->product_size ?? '-'}}</td>
            <td>{{ number_format($product->details->unit_price) }}</td>
            <td>{{ $product->details->stock_quantity }}</td>
            <td>{{ $product->status?->name ?? $product->status }}</td>
            <td>
                @if(!empty($product->image_1))
                    <img src="{{ asset('storage/'.$product->image_1) }}" alt="" style="width:60px; height:auto;">
                @endif
            </td>
            <td>
                <a href="{{ route('seller.products.edit',  ['id' => $product->id]) }}" class="text-decoration-none fw-bold" style="color:#071657">View</a>
                {{-- ここに編集/削除リンクを追加してもOK --}}
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="9" class="text-center text-muted py-4">No products yet.</td>
            </tr>    
        @endforelse
    </tbody>
</table>
</div>

<div class="d-flex justify-content-center">
    {{ $products->links() }}
</div>