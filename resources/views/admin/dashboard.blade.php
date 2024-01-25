@extends('layouts.app')

@section('title', 'Admin: Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
@push('js')
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
@endpush

@section('content')
    <div class="justify-content-center rounded border dashboard" style="min-width:696px">
        <h1 class="ps-3 mt-2">Dashboard</h1>
        {{-- Sort by --}}
        <div class="d-flex mb-4">
            <p class="col-2 text-center my-auto">Sort by</p>
            <div class="d-flex">
                <div class="dropdown me-2" id="mainCategory-select">
                    <button class="btn btn-primary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Main Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown me-2" id="subCategory-select">
                    <button class="btn btn-secondary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sub Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown" id="role-select">
                    <button class="btn btn-secondary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Role
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Select Sale, Profit and Ranking Display Area --}}
        <div class="d-flex display mb-4">
            {{-- Select Sale, Profit and Ranking Tab --}}
            <ul class="nav flex-column col-2 justify-content-evenly align-items-center">
                <p>Display</p>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#dashboard-sale" data-bs-toggle="tab"><button
                            class="btn btn-outline-primary" checked style="width: 100px">Sale</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dashboard-profit" data-bs-toggle="tab"><button
                            class="btn btn-outline-primary" style="width: 100px">Profit</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dashboard-ranking" data-bs-toggle="tab"><button
                            class="btn btn-outline-primary" style="width: 100px">Ranking</button></a>
                </li>
            </ul>
            {{-- Display Sale, Profit and Ranking Tab Contents --}}
            <div class="tab-content container-fluid mb-2 me-2 border rounded-bottom-1">
                <div id="dashboard-sale" class="tab-pane">
                    <h1>Sale</h1>
                    <div class="d-flex">
                        <canvas id="barChart"></canvas>
                        <table class="table table-hover align-migddle bg-white text-secondary text-center">
                            <thead class="small table-secondary text-secondary">
                                <tr>
                                    <th>FOLLOWER ID</th>
                                    <th>FOLLOWER NAME</th>
                                    <th>FOLLOWING ID</th>
                                    <th>FOLLOWING NAME</th>
                                    <th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                    <td># 738</td>
                                    <td>YAMADA TAROU</td>
                                    <td>2023/01/01</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                    <td># 738</td>
                                    <td>YAMADA TAROU</td>
                                    <td>2023/01/01</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                    <td># 738</td>
                                    <td>YAMADA TAROU</td>
                                    <td>2023/01/01</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                    <td># 738</td>
                                    <td>YAMADA TAROU</td>
                                    <td>2023/01/01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="dashboard-profit" class="tab-pane">
                    <table class="table table-hover align-migddle bg-white text-secondary text-center">
                        <thead class="small table-secondary text-secondary">
                            <tr>
                                <th>FOLLOWER ID</th>
                                <th>FOLLOWER NAME</th>
                                <th>FOLLOWING ID</th>
                                <th>FOLLOWING NAME</th>
                                <th>DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td># 738</td>
                                <td>YAMADA TAROU</td>
                                <td>2023/01/01</td>
                            </tr>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td># 738</td>
                                <td>YAMADA TAROU</td>
                                <td>2023/01/01</td>
                            </tr>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td># 738</td>
                                <td>YAMADA TAROU</td>
                                <td>2023/01/01</td>
                            </tr>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td># 738</td>
                                <td>YAMADA TAROU</td>
                                <td>2023/01/01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        {{-- Term --}}
        <div class="d-flex term">
            <div class="col-2 text-center">
                <p>Term</p>
            </div>
            <div>
                <button class="btn btn-outline-info mb-2" checked style="width: 100px">Year</button>
                <div class="d-flex mb-2">
                    <button class="btn btn-outline-info me-3" style="width: 100px">2020</button>
                    <button class="btn btn-outline-info me-3" style="width: 100px">2021</button>
                    <button class="btn btn-outline-info me-3" style="width: 100px">2022</button>
                    <button class="btn btn-outline-info me-3" style="width: 100px">2023</button>
                </div>
                <button class="btn btn-outline-info mb-2" checked style="width: 100px">Month</button>
                <div class="mb-2">
                    <div class="d-flex mb-2">
                        <button class="btn btn-outline-info me-3" style="width: 100px">Jan</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Feb</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Mar</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Apr</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">May</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Jun</button>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-outline-info me-3" style="width: 100px">Jul</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Aug</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Sep</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Oct</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Nov</button>
                        <button class="btn btn-outline-info me-3" style="width: 100px">Dec</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
