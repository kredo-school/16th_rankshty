@extends('layouts.app')

@section('title', 'Information')

@section('content')

<div class="row justify-content-center">
    <h1 class="text-center">Information</h1>
</div>
<div class="row">
    <div class="col-2 text-center">
        <h4 class="border-bottom border-thick border-orange" style="color: #FA8557; ,border-bottom; 1rem solid #FA8557;">Information</h4>
    </div>
    <div class="col-2 text-center">
        <h4>Notification</h4>
    </div>
</div>
<div class="row border-bottom">
    <span>[12/20 21:40 Update] A system failure has occured.</span>
    <span class="text-secondary">2023/12/20 21:40</span>
</div>

@endsection