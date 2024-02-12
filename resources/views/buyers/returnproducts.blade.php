@extends('layouts.app')

@section('title', 'Buyer: Return Products Page')

@section('content')
    <style>
        ::marker {
            color: #071657;
            font-size: 300%;
        }

        ul {
            font-size: 16px;
            line-height: 10px;
        }

        ul li span {
            vertical-align: 10px;
        }
    </style>

    <div class="container">
        <div class="container-header text-center">
            <h1 class="fw-bold">Write Reviews</h1>
        </div>
        <div class="container-body d-flex flex-column justify-content-evenly">
            <h4>We are confident that you love our products, however in
                the event that you would like to apply for a refund, please follow
                the processes set out below.Please note that if a return is sent
                without an RMA number, we may return the item(s) to you or
                charge you a restocking fee.
                Our standard returns policy for item(s) bought is 30 days
                and to qualify for a full refund the item must be:</h4>
            <ul class="mt-2">
                <li><span>Unused</span></li>
                <li><span>In its original packaging</span></li>
                <li><span>In a resalable condition, and</span></li>
                <li><span>returned to us within 30 days of purchase</span></li>
            </ul>
            <h4>Please follow the below steps:Contact us via email
                at proxy@gmail.com/ message clearly stating the
                following:</h4>
            <ul class="mt-2">
                <li><span>Your Order Number, Your Full Name and Delivery Address</span></li>
                <li><span>The reason for requesting a RMA</span></li>
            </ul>
            <h4>We will either accept or reject the return claim.
                Upon return approval, the return handling process
                will be coordinated by us.</h4>
            <h4>Please use the button below to exchange returns via DM.</h4>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-primary" style="width: 200px; line-height: 40px;">POST</a>
        </div>
    </div>

@endsection
