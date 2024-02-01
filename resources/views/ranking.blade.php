@extends('layouts.app')

@section('title', 'Ranking')

@section('content')
    <div class="justify-content-center" style="min-width:696px">
        {{-- Table sorted by sales --}}
        @if (request()->is('ranking/bestseller'))
            <h1 class="ps-3 mt-2">Best seller</h1>
            <table class="table table-hover border align-middle bg-white text-secondary text-center">
                <thead class="small table-info text-secondary text-uppercase">
                    <tr>
                        <th>No</th>
                        <th>image</th>
                        <th>name</th>
                        <th>rating</th>
                        <th>review</th>
                        <th>favorite</th>
                        <th>Sales Price</th>
                        <th>seller</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="fa-solid fa-crown fa-2x me-1"></i>
                            <span class="fs-5 fw-bold text-orange">1</span>
                        </td>
                        <td>
                            <img src="{{ asset('images/Green Capsicum.png')}}" alt="Green Capsicum">
                        </td>
                        <td>Green Capsicum</td>
                        <td>
                            <i class="fa-solid fa-star"></i>
                            4.8
                        </td>
                        <td>3500</td>
                        <td style="position: relative;">
                            <button type="button" class="btn btn-link p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            5000
                        </td>
                        <td>1,950</td>
                        <td>A company</td>
                    </tr>
                </tbody>
            </table>
        @endif

        {{-- Table sorted by review --}}
        @if (request()->is('ranking/review'))
            <h1 class="ps-3 mt-2">Reviews ranking</h1>
            <table class="table table-hover border align-middle bg-white text-secondary text-center">
                <thead class="small table-info text-secondary text-uppercase">
                    <tr>
                        <th>No</th>
                        <th>image</th>
                        <th>name</th>
                        <th>rating</th>
                        <th>review</th>
                        <th>favorite</th>
                        <th>Sales Price</th>
                        <th>seller</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="fa-solid fa-crown fa-2x me-1"></i>
                            <span class="fs-5 fw-bold text-orange">1</span>
                        </td>
                        <td>image</td>
                        <td>iPhone</td>
                        <td>
                            <i class="fa-solid fa-star"></i>
                            4.8
                        </td>
                        <td>3500</td>
                        <td style="position: relative;">
                            <button type="button" class="btn btn-link p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            5000
                        </td>
                        <td>1,950</td>
                        <td>A company</td>
                    </tr>
                </tbody>
            </table>
        @endif

        {{-- Table sorted by favorites --}}
        @if (request()->is('ranking/favorite'))
            <h1 class="ps-3 mt-2">Favorites ranking</h1>
            <table class="table table-hover border align-middle bg-white text-secondary text-center">
                <thead class="small table-info text-secondary text-uppercase">
                    <tr>
                        <th>No</th>
                        <th>image</th>
                        <th>name</th>
                        <th>rating</th>
                        <th>review</th>
                        <th>favorite</th>
                        <th>Sales Price</th>
                        <th>seller</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="fa-solid fa-crown fa-2x me-1"></i>
                            <span class="fs-5 fw-bold text-orange">1</span>
                        </td>
                        <td>image</td>
                        <td>iPhone</td>
                        <td>
                            <i class="fa-solid fa-star"></i>
                            4.8
                        </td>
                        <td>3500</td>
                        <td style="position: relative;">
                            <button type="button" class="btn btn-link p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            5000
                        </td>
                        <td>1,950</td>
                        <td>A company</td>
                    </tr>
                </tbody>
            </table>
        @endif

    </div>

@endsection
