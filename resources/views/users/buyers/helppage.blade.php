@extends('layouts.app')

@section('title', 'Help page')

@section('content')
    <form action="#" method="get">
        @csrf
        <div class="container">
            <div class="row">
                <div class="title fw-normal">
                    <h1>
                        Inquiry & FAQs
                    </h1>
                </div>
                <div class="col-6 list-group">
                    <div class="accordion mt-3" id="questionOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" style="background-color: #6c757d1f;"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Question No.1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#questionOne">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just about any HTML
                                    can go within the though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="questionTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" style="background-color: #6c757d1f;"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    Question No.2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                data-bs-parent="#questionTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just about any HTML
                                    can go within the though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="questionThree">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" style="background-color: #6c757d1f;"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                    aria-controls="collapseThree">
                                    Question No.3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                                data-bs-parent="#questionThree">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just about any HTML
                                    can go within the  though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="questionFour">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" style="background-color: #6c757d1f;"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                    aria-controls="collapseFour">
                                    Question No.4
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                                data-bs-parent="#questionFour">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just about any HTML
                                    can go within the though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="questionFive">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" style="background-color: #6c757d1f;"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true"
                                    aria-controls="collapseFive">
                                    Question No.5
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive"
                                data-bs-parent="#questionFive">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just about any HTML
                                    can go within the though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center">
                        <img src="{{ asset('assets/pexels-leeloo-thefirst-5428830.jpg') }}"  style="width: 90%; height: 300px: " alt="picture question-mark">
                    </div>
                </div>
            </div>
            <div class="alert alert-info mt-5 text-center" role="alert" style="margin: 20%">
            If your question isn't covered here, you can click <a href="#" class="alert-link"> here. </a> Feel free to email us for further support.
          </div>
        </div>

    </form>
@endsection
