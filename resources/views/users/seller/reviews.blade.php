@extends('layouts.app')

@section('title', 'Review Page for seller')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<div class="container">
    <div class="row">
        <div class="title fw-normal bg-info">
            <h1>Customer reviews</h1>
        </div>
        <div class="col-4 fs-1 m-0 p-0">
            <ul class="list-unstyled d-flex justify-content-start  m-0 p-0">
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
                <ul class="list-unstyled d-flex justify-content-start  m-0 p-0">
                    <div class="no-wrap fs-5 bg-info m-0 p-0">4.0/5</div>
                </ul>
            
        </div>
        
        <div class="col-2 bg-primary"><img src="/assets/pexels-quang-anh-ha-nguyen-885021.jpg" alt="coffee" style="width: 250px; height:250px;"></div>
        <div class="col-2 bg-info">PRODUCT NAME</div>
        <div class="col-2">
            <button type="button" class="btn btn-outline-info">Write a review</button>
        </div>
        
        <div class="col-2 bg-success text-center mt-5">
            <button type="button" class="btn btn-outline-info">See All Buying Options</button>
        </div>
        <div class="col-12">
            <div class="col-6">
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
            <div class="card border-0 col-10">
                <div class="card-body mt-2">
                    <div class="d-flex mb-1">
                        <img src="/assets/pexels-quang-anh-ha-nguyen-885021.jpg" class="rounded-circle shadow-1-strong" width="50" height="50">
                        
                        <div class="d-flex flex-column ms-3 m-0 p-0">
                            <div class="d-flex justify-content-between  m-0 p-0">
                                <h5 class="fw-bolder  m-0 p-0">Teresa May</h5>
                                <h5 class="fw-bold ms-5  m-0 p-0">TITLE HERE!</h5>
                            </div>
                            <div class="ms-0  m-0 p-0">
                                <ul class="list-inline d-flex justify-content-start m-0 p-0">
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
                                        <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-start m-0 p-0">
                                    <li>
                                        <div class="text-muted">FEB 3, 2024</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-0" style="font-size: 1rem; line-height: 1;">
                        Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquid neque ex maiores earum impedit ducimus quisquam quo, numquam quia ut pariatur deserunt nulla saepe odit aperiam quasi facilis sint.consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaeratad velit ab hic tenetur.
                    </div>
                    <div class="fw-light text-muted p-1">2 people found this helpful</div>
                    <button type="button" class="btn btn-outline-secondary">Helphul</button>
                    <button type="button" class="btn btn-light ms-3 text-muted">Report</button>
                </div>
                <div class="card-body mt-2">
                    <div class="d-flex mb-1">
                        <img src="/assets/pexels-quang-anh-ha-nguyen-885021.jpg" class="rounded-circle shadow-1-strong" width="50" height="50">
                        
                        <div class="d-flex flex-column ms-3 m-0 p-0">
                            <div class="d-flex justify-content-between  m-0 p-0">
                                <h5 class="fw-bolder  m-0 p-0">Teresa May</h5>
                                <h5 class="fw-bold ms-5  m-0 p-0">TITLE HERE!</h5>
                            </div>
                            <div class="ms-0  m-0 p-0">
                                <ul class="list-inline d-flex justify-content-start m-0 p-0">
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
                                        <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-start m-0 p-0">
                                    <li>
                                        <div class="text-muted">FEB 3, 2024</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-0" style="font-size: 1rem; line-height: 1;">
                        Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquid neque ex maiores earum impedit ducimus quisquam quo, numquam quia ut pariatur deserunt nulla saepe odit aperiam quasi facilis sint.consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaeratad velit ab hic tenetur.
                    </div>
                    <div class="fw-light text-muted p-1">2 people found this helpful</div>
                    <button type="button" class="btn btn-outline-secondary">Helphul</button>
                    <button type="button" class="btn btn-light ms-3 text-muted">Report</button>
                </div>
                <div class="card-body mt-2">
                    <div class="d-flex mb-1">
                        <img src="/assets/pexels-quang-anh-ha-nguyen-885021.jpg" class="rounded-circle shadow-1-strong" width="50" height="50">
                        
                        <div class="d-flex flex-column ms-3 m-0 p-0">
                            <div class="d-flex justify-content-between  m-0 p-0">
                                <h5 class="fw-bolder  m-0 p-0">Teresa May</h5>
                                <h5 class="fw-bold ms-5  m-0 p-0">TITLE HERE!</h5>
                            </div>
                            <div class="ms-0  m-0 p-0">
                                <ul class="list-inline d-flex justify-content-start m-0 p-0">
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
                                        <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-start m-0 p-0">
                                    <li>
                                        <div class="text-muted">FEB 3, 2024</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-0" style="font-size: 1rem; line-height: 1;">
                        Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquid neque ex maiores earum impedit ducimus quisquam quo, numquam quia ut pariatur deserunt nulla saepe odit aperiam quasi facilis sint.consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaeratad velit ab hic tenetur.
                    </div>
                    <div class="fw-light text-muted p-1">2 people found this helpful</div>
                    <button type="button" class="btn btn-outline-secondary">Helphul</button>
                    <button type="button" class="btn btn-light ms-3 text-muted">Report</button>
                </div>
                
            </div>        
    </div>
</div>
@endsection

