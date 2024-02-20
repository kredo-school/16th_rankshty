@extends('layouts.app')

@section('title', ' Buyer: Review Page')

@section('content')
<div class="container mt-4 col-12">
    <h1 class="mx-auto text-center mb-4 fw-bold">Write Reviews</h1>
    <div class="row">
        <form action="#" method="post form-horizontal">    
            @csrf
            @method('PATCH')    
            <div class="d-flex">
                <label for="product" class="col-md-2 col-form-label">Satisfaction rating<span class="text-danger">*</span></label>
                <div class="rating-css">
                    <div class="star-icon">
                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="product_rating" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="product_rating" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="product_rating" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="product_rating" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <label for="product" class="col-md-2 col-form-label">Review title<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" name="product" id="product" class="form-control">
                </div>
            </div>
            <br>
            <div class="d-flex">
                <label for="color" class="col-md-2 col-form-label form-inline">Add pictures<span class="text-danger">*</span></label>
           
                <div class="file-input-container me-3">
                    <input type="file" name="picture_1" id="picture_1" class="form-control"/>
                    <label for="picture_1">
                        <div class="insert-pics">
                            <i class="fa-solid fa-circle-plus circle-plus-color fs-1"></i>
                        </div>
                    </label>
                </div>

                <div class="file-input-container mx-3">
                    <input type="file" name="picture_2" id="picture_2" class="form-control" />
                    <label for="picture_2">
                        <div class="insert-pics">
                            <i class="fa-solid fa-circle-plus circle-plus-color fs-1"></i>
                        </div>
                    </label>
                </div>

                <div class="file-input-container mx-3">
                    <input type="file" name="picture_3" id="picture_3" class="form-control" />
                    <label for="picture_3">
                        <div class="insert-pics">
                            <i class="fa-solid fa-circle-plus circle-plus-color fs-1"></i>
                        </div>
                    </label>
                </div>

                <div class="file-input-container mx-3">
                    <input type="file" name="picture_4" id="picture_4" class="form-control" />
                    <label for="picture_4">
                        <div class="insert-pics">
                            <i class="fa-solid fa-circle-plus circle-plus-color fs-1"></i>
                        </div>
                    </label>
                </div>

                <div class="file-input-container mx-3">
                    <input type="file" name="picture_5" id="picture_5" class="form-control" />
                    <label for="picture_5">
                        <div class="insert-pics">
                            <i class="fa-solid fa-circle-plus circle-plus-color fs-1"></i>
                        </div>
                    </label>
                </div>
            </div>
            <div class="d-flex">
                <p class="col-md-2"></p>
                <p class="col-md-4 mt-3">*You can upload up to 5 pictures</p>
            </div>
            <br>
            <div class="d-flex">
                <label for="description" class="col-md-2 col-form-label">Add review<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <div class="col-md-8 offset-md-8">
                <input type="submit" value="Post" class="btn btn-primary text-white">
            </div>
        </form>
    </div>
</div>
@endsection

