@extends('layouts.app')

@section('title', 'Purchase history')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('/css/purchasehistory.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="bg-white shadow rounded-3">
                <div class="row">
                    <h2>Purchase History</h2>

                    <div class="row">
                        <table class="table" style="width: 100%; table-layout: fixed;">
                            <thead>
                                <tr class="bg-gray">
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
                                    <td><img src="{{ asset('img/green pepper.jpeg') }}" class="product-img" alt=""></td>
                                    <td>Green Capsicum</td>
                                    <td>$14.99</td>
                                    <td>1</td>
                                    <td>
                                        <p class="in-stock">In Stock</p>
                                    </td>
                                    <td>2024/01/10</td>
                                    <td>
                                        <button class="btn btn-primary" type="submit">Write Review</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" type="submit">Purchase</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" type="submit">Return</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/chinese cabbage.jpeg') }}" class="product-img" alt=""></td>
                                    <td>Chinese Cabbage</td>
                                    <td>$45.00</td>
                                    <td>1</td>
                                    <td>
                                        <p class="in-stock">In Stock</p>
                                    </td>
                                    <td>2024/01/11</td>
                                    <td>
                                        <a href="#">
                                        <button class="btn btn-primary" type="submit">Write Review</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                        <button class="btn btn-primary" type="submit">Purchase</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                        <button class="btn btn-primary" type="submit">Return</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/mango.jpeg') }}" class="product-img" alt=""></td>
                                    <td>Fresh Mango</td>
                                    <td>$45.00</td>
                                    <td>1</td>
                                    <td>
                                        <p class="out-of-stock">Out of Stock</p>
                                    </td>
                                    <td>2024/01/11</td>
                                    <td>
                                        <a href="#">
                                        <button class="btn btn-primary" type="submit">Write Review</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                        <button class="btn btn-gray" type="submit">Purchase</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                        <button class="btn btn-primary" type="submit">Return</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>



@endsection
