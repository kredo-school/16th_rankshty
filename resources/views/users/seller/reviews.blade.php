@extends('layouts.app')

@section('title', 'Review Page for seller')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<div class="container">
    <div class="row">
        <div class="title fw-normal">
            <h1>Customer reviews</h1>
        </div>
        <div class="col-4 fs-1">
            <p><span class="star5_rating" data-rate="5"></span><ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                  <div class="no-wrap">4.0/5</div>
                </li>
              </ul> </p>
        </div>
        
        <div class="col-4 bg-primary"><img src="/assets/pexels-quang-anh-ha-nguyen-885021.jpg" alt="coffee" style="width: 250px; height:250px;"></div>
        <div class="col-4 bg-success text-center mt-5">
            <button type="button" class="btn btn-outline-info">See All Buying Options</button>
        </div>
        <div class="col-12 bg-secondary">
            <div class="accordion mt-3" id="questionOne">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" style=""
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            How are ratings calculated?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#questionOne">
                        <div class="accordion-body">
                            To calculate the overall star rating and percentage breakdown by star, we don't use a simple average. Instead, our system considers things like how recent a review is and if the reviewer bought the item on RANKSHTY. It also analyzes reviews to verify trustworthiness.
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="btn-group">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="filter_btn" data-bs-toggle="dropdown" aria-expanded="false">
                        FILTER BY
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter_btn">
                        <li><a class="dropdown-item" href="#">All reviewers</a></li>
                        <li><a class="dropdown-item" href="#">Verified purchase only</a></li>
                    </ul>
                </div>
            </div>
            <div class="btn-group ms-3">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="star_btn" data-bs-toggle="dropdown" aria-expanded="false">
                        All STARS
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="star_btn">
                        <li><a class="dropdown-item" href="#">5 star only</a></li>
                        <li><a class="dropdown-item" href="#">4 star only</a></li>
                        <li><a class="dropdown-item" href="#">3 star only</a></li>
                        <li><a class="dropdown-item" href="#">2 star only</a></li>
                        <li><a class="dropdown-item" href="#">1 star only</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body mt-2">
                    <div class="d-flex mb-4">
                        <img src="/assets/pexels-quang-anh-ha-nguyen-885021.jpg" class="rounded-circle shadow-1-strong" width="50" height="50">
                        
                        <div class="d-flex flex-column ms-3">
                            <div class="d-flex justify-content-between">
                                <h5 class="fw-bolder">Teresa May</h5>
                                <h5 class="fw-bold ms-5">TITLE</h5>
                            </div>
                            
                            <div class="ms-0">
                            <ul class="list-unstyled d-flex justify-content-start">
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                        <div class="mt-0 bg-info">
                            Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquid neque ex maiores earum impedit ducimus quisquam quo, numquam quia ut pariatur deserunt nulla saepe odit aperiam quasi facilis sint.consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaeratad velit ab hic tenetur.
                        </div>
                        <div class="fw-light">2 people found this helpful</div>
                        <button type="button" class="btn btn-outline-secondary">Helphul</button>
                        <button type="button" class="btn btn-outline-warning ms-3">Report</button>
                </div>
            </div>
                   
    </div>
</div>
@endsection

