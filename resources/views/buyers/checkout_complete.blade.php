@extends('layouts.app')

@section('title', 'Buyer: Checkout Complete Page')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endpush

@section('content')

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
