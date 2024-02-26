@extends('layouts.app')

@section('title', 'Admin: Ranking')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Ranking</h1>
        <table class="table table-hover align-middle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary text-uppercase">
                <tr>
                    <th>No</th>
                    <th>image</th>
                    <th>name</th>
                    <th>rating</th>
                    <th>review</th>
                    <th>favorite</th>
                    <th>Sales Price</th>
                    <th>profit</th>
                    <th>profit ratio</th>
                    <th>Unit Sales</th>
                    <th>Total profit</th>
                    <th>seller</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $all_products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <img src="{{ $product->image_1 }}" alt="{{ $product->product_name }}" style="width: 100%">
                    </td>
                    <td>{{ $product->product_name }}</td>
                    <td>4.8</td>
                    <td>{{ $product->reviews->count() }}</td>
                    <td>{{ $product->favorites->count() }}</td>
                    <td>1,950</td>
                    <td>1,000</td>
                    <td>48.71</td>
                    <td>1,850</td>
                    <td>18,500</td>
                    <td>
                        @if($product->user)
                            {{ $product->user->business_name }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Table sorted by rating --}}
        {{-- Table sorted by number of favorites --}}

    </div>

@endsection
