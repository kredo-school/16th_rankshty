@extends('layouts.app')

@section('title', 'Admin: Complain detail')

@section('content')
    <div class="message" style="min-width:696px">
        <div class="row user mb-2">
            <div class="col-auto">
                <img src="{{ asset('images/user-circle-black.svg') }}" alt="user">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-bold">Title: </span><span>complaint</span><br>
                        <span class="fw-bold">Product: </span><span></span><br>
                        <span class="fw-bold">Type: </span><span>report</span><br>
                        <span class="fw-bold">User: </span><span>seller1</span><br>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus praesentium pariatur suscipit voluptate minima cum? Hic sapiente adipisci in expedita itaque esse nemo iste, id delectus libero molestias velit perferendis?</span><br>
                        <span class="fw-bold">Date: </span><span>3hours ago</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row admin mb-2">
            <div class="col">
                <div class="card bg-light">
                    <div class="card-body">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus praesentium pariatur suscipit voluptate minima cum? Hic sapiente adipisci in expedita itaque esse nemo iste, id delectus libero molestias velit perferendis.</span><br>
                        <span class="fw-bold">Date: </span><span>2hours ago</span>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <img src="{{ asset('images/user-circle-white.svg') }}" alt="admin">
            </div>
        </div>

        <div class="row user mb-2">
            <div class="col-auto">
                <img src="{{ asset('images/user-circle-black.svg') }}" alt="user">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus praesentium pariatur suscipit voluptate minima cum? Hic sapiente adipisci in expedita itaque esse nemo iste, id delectus libero molestias velit perferendis?</span><br>
                        <span class="fw-bold">Date: </span><span>1hours ago</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row admin mb-2">
            <div class="col">
                <div class="card bg-light">
                    <div class="card-body">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus praesentium pariatur suscipit voluptate minima cum? Hic sapiente adipisci in expedita itaque esse nemo iste, id delectus libero molestias velit perferendis.</span><br>
                        <span class="fw-bold">Date: </span><span>30minutes ago</span>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <img src="{{ asset('images/user-circle-white.svg') }}" alt="admin">
            </div>
        </div>

        <form action="#" method="post">
            @csrf
            <div class="row align-items-end mt-5 mx-auto">
                <div class="col">
                    <textarea name="body" cols="30" rows="5" class="form-control bg-light border">Message here.</textarea>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Reply</button>
                </div>
            </div>
        </form>

    </div>
@endsection
