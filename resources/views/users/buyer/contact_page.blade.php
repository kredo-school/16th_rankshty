@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
    <form action="#" method="get">
        @csrf

        <div class="container mt-5">
            <div class="row justify-content-center align-items-start">
                <div class="col-2 text-center border shadow">
                    <a href="#">
                        <i class="fa-regular fa-envelope mt-3" style="font-size: 50px;color: #0C66A6; border-radius: 40%;"></i>
                    </a>
                    <div class="text-muted">
                        admin@gmail.com
                    </div>
                    <hr>
                    <a href="#">
                        <i class="fa-solid fa-phone-volume" style="font-size: 50px; color: #0C66A6; border-radius: 40%;"></i>
                    </a>
                    <div class="text-muted mb-3">
                        (219) 555-0114 <br>(164) 333-0487
                    </div>
                </div>



                <div class="col-7 ms-5 p-5 border shadow">
                    <h3>Contact Us Here!</h3>
                    <span class="text-muted">If you have any questions or feedback, please let us know.</span>
                    <div class="mt-5">
                        <input class="form-control form-control-lg" type="text" placeholder="Title">
                        {{-- ERROR --}}
                        {{-- @error('title')
                           <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb-2">
                        <label for="content" class="form-label fw-bold"></label>
                        <textarea name="content" id="content" rows="3" class="form-control" placeholder="Write down here..."></textarea>
                        {{-- ERROR --}}
                        {{-- @error('content')
                           <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="submit" class="btn px-5" style="color: white; background-color: #4CA0D4;">Send Message</button>
                    </div>
                
                     
                </div>
            </div>
        </div>
        
    </form>
@endsection
