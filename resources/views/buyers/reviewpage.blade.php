@extends('layouts.app')

@section('title', 'Buyer: Reviews Page')

@section('content')

    <div class="container">
        <div class="container-header text-center">
            <h1 class="mt-5 fw-bold">Write Reviews</h1>
        </div>
        <img src="#" alt="" class="rounded float-start">
        <h4>WalkStyle Haven</h4>
        <h4>Purchase date 2023/11/20</h4>
        <h4>Product: UrbanSprint</h4>


        <div class="star-icon">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>

        <form action="#" method="post">
            @csrf
            <label for="review-title">Satisfaction rating</label><br>
            <input type="radio" value="1" name="product_rating" id="rating1" class="fa-regular fa-star btn-warning"
                style="border-color:#071657">
            <label for="review-title">Review Title</label><br>
            <input type="text" name="review-title" id="review-title">
            <label for="">Add pictures</label>
            <input type="file" name="pic" id="pic" class="rounded" style="color: #071657">
            <label>Add view</label><br>
            <textarea name="add-view" id="add-view" cols="30" rows="10"></textarea><br>
            <input type="submit" class="btn text-white " value="Post"
                style="background-color: #071657; border-radius: 43px; width: 80px">
        </form>
    </div>


@endsection
