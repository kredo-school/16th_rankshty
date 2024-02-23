@extends('layouts.app')

@section('title', 'Follower List')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="bg-white shadow rounded-3 p-0">
                <div class="row">
                    <h2 class="p-4">Follower List</h2>
                </div>
                <table class="table text-center">
                    <thead class="align-middle" style="height: 85px;">
                        <tr>
                            <th>USER ID</th>
                            <th>DATE</th>
                            <th>USER NAME</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>

                    <tbody class="align-middle">
                        <tr class="bg-white" style="height: 60px;">
                            <td>#738</td>
                            <td>8 Sep,2020</td>
                            <td>YAMADA TARO</td>
                            <td style="color: #4CA0D4;">Follower</td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>#738</td>
                            <td>8 Sep,2020</td>
                            <td>YAMADA TARO</td>
                            <td style="color: #4CA0D4;">Follower</td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>#738</td>
                            <td>8 Sep,2020</td>
                            <td>YAMADA TARO</td>
                            <td style="color: #4CA0D4;">Follower</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</body>

@endsection