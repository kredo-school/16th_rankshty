@extends('layouts.app')

@section('title', ' Buyer: Products Registry')

@section('content')
<div>
    <h1>Write Reviews</h1>
    <img src="#" alt="">
    <h3>WalkStyle Haven</h3>
    <h3>Purchase date 2023/11/20</h3>
    <h3>Product: UrbanSprint</h3>
    <h3>Satisfaction rating</h3>
    <i class="fa-regular fa-star"></i>
    <i class="fa-regular fa-star"></i>
    <i class="fa-regular fa-star"></i>
    <i class="fa-regular fa-star"></i>
    <i class="fa-regular fa-star"></i>
    
    <form action="#" method="#">
        <label for="review-title">Review Title</label><br>
        <input type="text" name="review-title" id="review-title">
    </form>

    <h3>Add pictures</h3>

    <form action="#">
        <label>Add view</label><br>
        <textarea name="add-view" id="add-view" cols="30" rows="10"></textarea>
        <input type="submit" value="Post" class="btn text-white">

    </form>
</div>




@endsection
