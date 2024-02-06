@extends('layouts.app')

@section('title', 'Seller: Help page')

@section('content')
    <div class="container">
        <div class="title">
            <h1>Inquiry & FAQs</h1>
        </div>
        <div class="accordion mt-5" id="accordionExample">
            <div class="accordion mt-3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="background-color: #6c757d1f;" aria-expanded="false" aria-controls="collapseOne">
                        Question No.1
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML.
                    </div>
                    </div>
                </div>
            </div>
            <div class="accordion mt-3">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="background-color: #6c757d1f;" aria-expanded="false" aria-controls="collapseTwo">
                        Question No.2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion mt-3">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" style="background-color: #6c757d1f;"aria-expanded="false" aria-controls="collapseThree">
                        Question No.3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion mt-3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" style="background-color: #6c757d1f;" aria-expanded="false" aria-controls="collapseFour">
                        Question No.4
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.
                    </div>
                    </div>
                </div>
            </div>
            <div class="accordion mt-3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" style="background-color: #6c757d1f;"aria-expanded="false" aria-controls="collapseFive">
                        Question No.5
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-info mt-5 text-center" role="alert" style="margin: 20%">
            If your question isn't covered here, you can click <a href="{{ route('seller.contact') }}" class="alert-link"> here. </a> Feel free to email us for further support.
        </div>
    </div>

@endsection
