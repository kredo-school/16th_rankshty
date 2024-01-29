@extends('layouts.app')

@section('title', 'Ranking')

@section('content')
    <div class="justify-content-center" style="min-width:696px">
        {{-- Table sorted by sales --}}
        @if (request()->is('ranking/bestseller'))
            <h1 class="ps-3 mt-2">Best seller</h1>
            <table class="table table-hover align-migddle bg-white text-secondary text-center">
                <thead class="small table-secondary text-secondary text-uppercase">
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
                        <td>1</td>
                        <td>image</td>
                        <td>iPhone</td>
                        <td>4.8</td>
                        <td>3500</td>
                        <td>5000</td>
                        <td>1,950</td>
                        <td>A company</td>
                    </tr>
                </tbody>
            </table>
        @endif

        {{-- Table sorted by review --}}
        @if (request()->is('ranking/review'))
            <h1 class="ps-3 mt-2">Review</h1>
            <table class="table table-hover align-migddle bg-white text-secondary text-center">
                <thead class="small table-secondary text-secondary text-uppercase">
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
                        <td>1</td>
                        <td>image</td>
                        <td>iPhone</td>
                        <td>4.8</td>
                        <td>3500</td>
                        <td>5000</td>
                        <td>1,950</td>
                        <td>A company</td>
                    </tr>
                </tbody>
            </table>
        @endif

        {{-- Table sorted by favorites --}}
        @if (request()->is('ranking/favorite'))
            <h1 class="ps-3 mt-2">Favorite</h1>
            <table class="table table-hover align-migddle bg-white text-secondary text-center">
                <thead class="small table-secondary text-secondary text-uppercase">
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
                        <td>1</td>
                        <td>image</td>
                        <td>iPhone</td>
                        <td>4.8</td>
                        <td>3500</td>
                        <td>5000</td>
                        <td>1,950</td>
                        <td>A company</td>
                    </tr>
                </tbody>
            </table>
        @endif

    </div>

@endsection
