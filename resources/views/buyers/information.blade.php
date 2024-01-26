@extends('layouts.app')

@section('title', 'Information')

@section('content')
<style>
    .border-orange {
        color: #FA8557;
    }
    .text-orange {
        color: #FA8557;
    }
</style>

<head>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="row justify-content-center">
        <h1 class="text-center">Information</h1>
    </div>
    <div class="row">
        <div class="col-2">
            <h4 class="border-bottom border-orange text-orange">Information</h4>
        </div>
        <div class="col-2">
            <h4>Notification</h4>
        </div>
    </div>
    <div class="row border-bottom">
        <span>[12/20 21:40 Update] A system failure has occured.</span>
        <span class="text-secondary">2023/12/20 21:40</span>
    </div>
</body>

@endsection