@extends('layouts.app')

@section('title', 'Review Page for seller')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<div class="container">
    <div class="row">
        <div class="title fw-normal">
            <h1>Customer reviews</h1>
        </div>
        <div class="col-4">
            <p><span class="star5_rating" data-rate="5"></span> 星5</p>
        </div>
        
        <div class="col-2 bg-primary"></div>
        <div class="col-2 bg-info"></div>
        <div class="col-4 bg-primary"></div>
        <div class="col-12 bg-secondary">
            <div class="accordion mt-3" id="questionOne">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" style=""
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            How are ratings calculated?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#questionOne">
                        <div class="accordion-body">
                            To calculate the overall star rating and percentage breakdown by star, we don't use a simple average. Instead, our system considers things like how recent a review is and if the reviewer bought the item on RANKSHTY. It also analyzes reviews to verify trustworthiness.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

