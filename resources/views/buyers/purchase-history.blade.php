@extends('layouts.app')

@section('title', 'Purchase history')

@section('content')

<div>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>PRODUCT</th>
                <th>PRICE</th>
                <th>UNIT</th>
                <th>STOCK STATUS</th>
                <th>ORDER DATE</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td></td>
                <td>Green Capsicum</td>
                <td>$14.99</td>
                <td>1</td>
                <td>In Stock</td>
                <td>2024/01/10</td>
                <td>
                    <button type="submit" class="r-1">Write Review</button>
                </td>
                <td>
                    <button type="submit" class="r-1">Purchase</button>
                </td>
                <td>
                    <button type="submit" class="r-1">Return</button>
                </td>
            </tr>
        </tbody>

</table>


</div>



@endsection
