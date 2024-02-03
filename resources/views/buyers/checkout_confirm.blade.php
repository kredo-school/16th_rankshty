@extends('layouts.app')

@section('title', 'Buyer: Checkout Confirm Page')
<style>
    label:not(.form-check-label) {
        margin-top: 0.5rem;
        margin-bottom: 0rem;
    }

    .card-body img {
        width: 50px;
        height: 50px;
    }

    .card {
        width: 40%;
    }

    .card-footer,
    .card-header {
        background-color: #f8fafc !important;
    }
</style>

@section('content')

    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Chechout Confirm</h1>

        <div class="d-flex justify-content-between">
            {{-- Left area --}}
            <div id="biling_payment_information" class="w-50">
                {{-- Billing Information Area --}}
                <div class="row ms-2 pb-2 border-bottom">
                    <h4 class="ps-3 mt-1">Billing Information</h4>
                    <div class="ms-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="firstname_1" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname_1" readonly value="John">
                            </div>
                            <div class="col-6">
                                <label for="lastname_1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname_1" readonly value="Smith">
                            </div>
                        </div>
                        <label for="zipcode_1" class="form-label">Zip code</label>
                        <input type="text" class="form-control" id="zipcode_1" readonly value="111-1111">
                        <label for="street_adress_1" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="street_adress_1" readonly value="Tokyo City 111-111">
                        <label for="email_1" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email_1" readonly value="aaaa@google.com">
                        <label for="phone_1" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone_1" readonly value="111-2222-3333">
                    </div>
                </div>
                {{-- Payment Method Area --}}
                <div class="row ms-2 my-2">
                    <h4 class="ps-3 mt-1">Payment Method</h4>
                    <div class="ms-2">
                        <?php $payment_method = 'Credit Card'; ?>
                        <div class="form-control fw-bold border-0 ps-0" value="{{ $payment_method }}">
                            {{ $payment_method }}
                        </div>
                        <div class="row">
                            <label class="form-label">Card Number</label>
                            <div class="col-3 d-flex gap-2">
                                <input type="password" class="form-control col-3" id="card_number_1" readonly
                                    value="John">
                                <input type="password" class="form-control col-3" id="card_number_2" readonly
                                    value="Smith">
                                <input type="password" class="form-control col-3" id="card_number_3" readonly
                                    value="Smith">
                                <input type="password" class="form-control col-3" id="card_number_4" readonly
                                    value="Smith">
                            </div>
                        </div>
                        <div class="row gap-2">
                            <div class=col>
                                <label class="form-label">Date Of Expiry</label>
                                <div class="col-6 d-flex gap-2">
                                    <input type="text" class="form-control col-6" id="expiry_1" readonly value="12">
                                    <span>/</span>
                                    <input type="text" class="form-control col-6" id="expiry_2" readonly value="27">
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label" for="security_code">Security Code</label>
                                <div class="col-6">
                                    <input type="password" class="form-control col-6" id="security_code" readonly
                                        value="27">
                                </div>
                            </div>
                        </div>
                        <label for="card_name" class="form-label">Card Name</label>
                        <input type="text" class="form-control" id="card_name" readonly value="JOHN SMITH">
                    </div>
                </div>
            </div>
            {{-- Right Area --}}
            <div class="card ms-5 H-50">
                {{-- Order Summary Area --}}
                <div class="card-header border-0">
                    <h4>Order Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/150" alt="product image" class="img-thumbnail">
                            <h5>Subtotal:</h5>
                        </div>
                        <h5>$84.00</h5>
                    </div>
                </div>
                <div class="card-footer border-0">
                    <div class="d-flex justify-content-between">
                        <h5>Subtotal:</h5>
                        <h5>$84.00</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5>Shipping:</h5>
                        <h5>Free</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5>Total:</h5>
                        <h4>$100</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Button Area --}}
    <div class="d-flex mt-2 gap-2">
        <a href="#" type="submit" class="btn btn-primary" style="line-height: 40px;"><i
                class="fa-solid fa-arrow-left me-2"></i>Back</a>
        <a href="#" type="submit" class=" btn btn-primary" style="line-height: 40px;">Next <i
                class="fa-solid fa-arrow-right ms-2"></i></a>
    </div>

@endsection
