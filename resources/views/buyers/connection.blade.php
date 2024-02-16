@extends('layouts.app')

@section('title', 'Connection')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('/css/connection.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="bg-white shadow rounded-3 p-5">
                <div class="row pt-2 r-2">
                    <h3>Direct Message</h3>
                </div>
                <div class="row">
                    <div class="col-3 border">
                        <!-- User list -->
                        <ul class="list-unstyled m-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <li><img src="{{ asset('img/shoppingcart.png') }}" class="rounded-circle border link-underline link-underline-opacity-0" style="height: 30px; width: 30px;" alt="">
                                Happy Mall</li>    
                            </a>
                        </ul>
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col p-2 border">
                                <!-- message title box -->
                                <a href="#" class="text-decoration-none text-dark">
                                <img src="{{ asset('img/shoppingcart.png') }}" class="rounded-circle border link-underline link-underline-opacity-0" style="height: 30px; width: 30px;" alt="">
                                Happy Mall
                                </a>
                                <div class="col p-2 text-center">
                                    <span>2023/12/20</span>
                                </div>
                                    <div class="row">
                                        <div class="col-6 me-2 mt-3 float-right">
                                            <div class="rounded-4 bg-gray p-2 ">Hello. I have a question about your product details.May I ask a question?</div>
                                            <img src="{{ asset('img/Woman_1.jpeg') }}" class="rounded-circle border link-underline link-underline-opacity-0 float-right" style="height: 30px; width: 30px;" alt="">
                                        </div>
                                        <div class="col-6 ms-2 mt-3 float-left">
                                            <img src="{{ asset('img/shoppingcart.png') }}" class="rounded-circle border link-underline link-underline-opacity-0 float-left" style="height: 30px; width: 30px;" alt="">
                                            <div class="rounded-4 p-2 border-gray">Hello. Of course!</div>
                                        </div>
                                    </div>
                                
                                <div class="row">
                                    <div class="input-group">

                                        <button type="submit" class="btn btn-sm shadow-none p-0 m-0 border">
                                            <i class="fa-regular fa-image"></i>
                                        </button>

                                        <textarea id="textarea" rows="1" class="form-control bg-white r-6" placeholder="Message..."></textarea>

                                        <button type="submit" class="btn btn-sm shadow-none p-0 m-0 border">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


@endsection