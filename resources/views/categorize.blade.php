@extends('layouts.app')

@section('title', 'Categorize')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div class="justify-content-center" style="min-width:696px">
        <div class="row mb-2">
            <div class="col">
                <label for="select" id="sort" class="form-label float-start me-2">Sort by</label>
                <select class="form-select w-25 py-0 mb-2" id="sort" aria-label="Select sort">
                    <option selected>Latest</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-4 text-end">
                <span class="fw-bold">52</span> Results Found
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-3 mb-4">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-img-overlay d-flex align-items-top justify-content-between">
                        <div class="card-img-overlay-sale rounded-1">
                            <p>SALE</p>
                        </div>
                        <div class="text-end">
                            <button type="button" class="mb-1">
                                <i class="fa-regular fa-heart fa-2x"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon">
                            <i class="fa-solid fa-bag-shopping fa-2x" style="color: #fa8557"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-img-overlay d-flex align-items-top justify-content-between">
                        <div class="card-img-overlay-sale rounded-1">
                            <p>SALE</p>
                        </div>
                        <div class="text-end">
                            <button type="button" class="mb-1">
                                <i class="fa-solid fa-heart fa-2x"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon-selected">
                            <i class="fa-solid fa-bag-shopping fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon">
                            <i class="fa-solid fa-bag-shopping fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon">
                            <i class="fa-solid fa-bag-shopping fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon">
                            <i class="fa-solid fa-bag-shopping fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon">
                            <i class="fa-solid fa-bag-shopping fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card d-block">
                    <img src="{{ asset('images/Green Capsicum.png') }}" class="card-img-top" alt="demo">
                    <div class="card-body d-flex align-items-center
                    justify-content-between">
                        <div>
                            <p class="my-auto">Green Apple</p>
                            <h3 class="my-auto">$14.99</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <button type="button" class="btn-icon">
                            <i class="fa-solid fa-bag-shopping fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation usermanagement">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link border disabled" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item checked"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link border" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
