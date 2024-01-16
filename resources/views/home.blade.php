@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- Top Area --}}
            <div class="d-flex" style="width: 1520px; height:400px; background-color: #CFEFFA">
                {{-- Top Area' telop --}}
                <div class="text-left border d-flex align-items-center">
                    <p>WELCOME TO RANKSHTY</p>
                    <h1>Enjoy Shopping</h1>
                    <p>Let's Check Ranking!</p>
                </div>
                {{-- End Top Area' telop --}}
                {{-- Top Area's Image --}}
                <div class="text-center border">
                    <img src="{{ asset('img/top.jpg') }}" alt="top" style="width: 400px; height: 350px">
                </div>
                {{-- End Top Area's Image --}}

            </div>
            {{-- End Top Area --}}

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
