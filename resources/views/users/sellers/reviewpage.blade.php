@extends('layouts.app')

@section('title', 'Review Page for seller')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<div class="container">
    <div class="row">
        <div class="title fw-normal">
            <h1>Customer reviews</h1>
        </div>
        <div class="col-4">
            <p><span class="star5_rating" data-rate="5"></span> 星5</p>
        </div>
        <div class="col-4 bg-secondary"></div>
        <div class="col-4 bg-primary"></div>
    </div>
</div>
@endsection
