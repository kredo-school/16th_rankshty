@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white text-center border-0">
                        <h1>{{ __('Create Account') }}</h1>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="User Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Comfirm Password">
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="isSeller" id="isSeller"
                                    {{ old('isSeller') ? 'checked' : '' }}>

                                <label class="form-check-label" for="isSeller">
                                    {{ __('Are you a Seller?') }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="accepet" id="accepet"
                                    {{ old('accepet') ? 'checked' : '' }}>

                                <label class="form-check-label" for="accepet">
                                    {{ __('Accept all terms & conditions') }}
                                </label>
                            </div>

                            <div class="row py-2">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                                        {{ __('Create Account') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row my-2 justify-content-center">
                                <div class="col-md-8 text-center">
                                    {{ __('Do you have an addount already?') }}
                                    <a href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
