@extends('layouts.app')

@section('title', 'Buyer: Checkout Complete Page')

@section('content')
    <style>
        ::marker {
            color: #071657;
            font-size: 300%;
        }

        ul {
            font-size: 16px;
            line-height: 30px;
            list-style: square;
        }

        ul li span {
            vertical-align: 10px;
        }
    </style>

    <div class="container">
        <div class="container-header text-center">
            <h1 class="fw-bold">Your order has been confirmed.</h1>
        </div>
        <div class="container-body d-flex flex-column justify-content-evenly">
            <ul class="my-5 mx-auto">
                <li><span>Thank you for your purchase from Rankshty.</span></li>
                <li><span>We have received your order and it is now being processed.</span></li>
                <li><span>We will let you know as soon as your parcel is ready to ship.</span></li>
            </ul>
            <div class="text-center">
                <a href="#" class="btn btn-primary" style="width: 200px; line-height: 40px;">POST</a>
            </div>
        </div>

    @endsection
