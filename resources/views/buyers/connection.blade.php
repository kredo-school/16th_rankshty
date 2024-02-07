@extends('layouts.app')

@section('title', 'Connection')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="bg-white shadow rounded-3 p-5">
            <div class="row border pt-2 r-2">
                <h3>Direct Message</h3>
            </div>
            <div class="row">
                <div class="col-3 border border-warning">
                    <!-- User list -->
                    <ul class="list-unstyled m-2">
                        <a href="#">
                            <li><img src="{{ asset('img/shoppingcart.png') }}" class="rounded-circle border link-underline link-underline-opacity-0" style="height: 30px; width: 30px;" alt="">
                            Happy Mall</li>    
                        </a>
                    </ul>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col border border-primary p-2">
                             <!-- message title box -->
                            <a href="#">
                            <img src="{{ asset('img/shoppingcart.png') }}" class="rounded-circle border link-underline link-underline-opacity-0" style="height: 30px; width: 30px;" alt="">
                            Happy Mall
                            </a>
                            <div class="col border border-primary p-2 text-center">
                                <span>2023/12/20</span>
                                <div class="row">
                                    <div class="col border border-danger ms-2 mt-3 float pull-left">
                                        <span class="rounded-4 bg-gray p-2">aaa</span>
                                    </div>
                                    <div class="col border border-danger me-2 mt-3 pull-right">
                                        <span>aaa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection