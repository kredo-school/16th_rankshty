@extends('layouts.app')

@section('title', 'Purchase history')

@section('content')

<style>
    .btn {
        border-radius: 50vh;
        height: 51px;
        width: 115px;
    }
    .btn-primary {
        border-color: #071657;
        background-color: #071657;
        color: #ffff;
    }
    .in-stock {
        display: inline-flex;
        padding: 4px 8px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 4px;
        background: rgba(76, 160, 212, 0.20);
        background-color: #4CA0D433
    }

    .out-of-stock {
        display: inline-flex;
        padding: 4px 8px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 4px;
        background: rgba(234, 75, 72, 0.20);
    }
</style>

<head>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="bg-white shadow rounded-3 p-5">
                <div class="row">
                    <h2>Purchase History</h2>
                </div>
                <!-- <div class="row"> -->
                    <table class="table">
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
                                <td><img src="{{ asset('img/green pepper.jpeg') }}" style="width: 100px; height: 100px;" alt=""></td>
                                <td>Green Capsicum</td>
                                <td>$14.99</td>
                                <td>1</td>
                                <td>
                                    <span class="in-stock">
                                        In Stock
                                    </span>
                                </td>
                                <td>2024/01/10</td>
                                <td>
                                    <button class="btn btn-primary r-2" type="submit">Write Review</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Purchase</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Return</button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/chinese cabbage.jpeg') }}" style="width: 100px; height: 100px;" alt=""></td>
                                <td>Chinese Cabbage</td>
                                <td>$45.00</td>
                                <td>1</td>
                                <td>In Stock</td>
                                <td>2024/01/11</td>
                                <td>
                                    <button class="btn btn-primary r-2" type="submit">Write Review</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Purchase</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Return</button>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                <!-- </div> -->
            </div>
        </div>
    </div>
    

</body>



@endsection
