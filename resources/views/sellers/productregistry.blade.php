@extends('layouts.app')

@section('title', ' Buyer: Products Registry')

@section('content')
<div class="container mt-4 col-12">
    <h1 class="mx-auto text-center mb-4 fw-bold">Products registration</h1>
    <div class="row">
        <form action="#" method="post form-horizontal">    
            @csrf
            @method('PATCH')    
            <div class="d-flex">
                <label for="product" class="col-md-2 col-form-label">Product name<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" name="product" id="product" class="form-control">
                </div>
            </div>
            <br>
            <div class="d-flex">
                <label for="category" class="col-md-2 col-form-label">Category name<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" name="category" id="category" class="form-control">
                </div>
            </div>
            <br>
            <div class="d-flex">
                <label for="quantity" class="col-md-2 col-form-label">Quantity<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" name="quantity" id="quantity" class="form-control">
                </div>
            </div>
            <br>
            <div class="d-flex">
                <label for="price_uni" class="col-md-2 col-form-label">Price per Unit<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" name="price_uni" id="price_uni" class="form-control">
                </div>
            </div>
            <br>
            
            <div class="d-flex">
                <label for="size" class="col-md-2 col-form-label form-inline">Size<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <select name="size" id="size" class="form-control form-inline">
                        <option value=""> </option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="LL">LL</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="d-flex">
                <label for="color" class="col-md-2 col-form-label form-inline">Color<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" name="color" id="color" class="form-control">
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
            <br>
            <div class="d-flex">
                <label for="description" class="col-md-2 col-form-label">Description<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <div class="d-flex">
                <label for="status" class="col-md-2 col-form-label">Status<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <select name="status" id="status" class="form-control">
                        <option disabled></option>
                        <option value=""></option>
                        <option value="draft">draft</option>
                        <option value="published">published</option>
                        <option value="archieved">archieved</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="col-md-8 offset-md-8">
                <input type="submit" value="Post" class="btn btn-primary text-white mt-3 ">
            </div>
        </form>
    </div>
</div>
@endsection
