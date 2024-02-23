@extends('layouts.app')

@section('title', 'Admin: Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
@push('js')
    <script src="{{ asset('js/seller-dashboard.js') }}" defer></script>
@endpush

@section('content')
    <div class="justify-content-center rounded border dashboard" style="min-width:696px">
        <h1 class="ps-3 mt-2">Dashboard(Order/Stock)</h1>
        {{-- Sort by --}}
        <div class="d-flex mb-4">
            <h3 class="col-2 text-center my-auto">Sort by</h3>
            <div class="d-flex">
                <div class="dropdown me-2" id="mainCategory-select">
                    <button class="btn btn-primary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Main Category
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="dropdown-item" value="Main Category ">Main Category</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Fashion">Fashion</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Car">Car</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Food">Food</div>
                        </li>
                    </ul>
                </div>
                <div class="dropdown me-2" id="subCategory-select">
                    <button class="btn btn-secondary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sub Category
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="dropdown-item" value="Sub Category ">Sub Category</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Inner">T-shirts</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Pants">Pants</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Hat">Hat</div>
                        </li>
                    </ul>
                </div>

                <div class="dropdown d-none" id="ranking-selection">
                    <button class="btn btn-secondary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Types
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="dropdown-item" value="Types ">Types</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Main Category">Main Category</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Sub Category">Sub Category</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Seller">Seller</div>
                        </li>
                        <li>
                            <div class="dropdown-item" value="Buyer">Buyer</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Select Sale, Profit and Ranking Display Area --}}
        <div class="d-flex display mb-4">
            {{-- Select Sale, Profit and Ranking Tab --}}
            <ul class="nav flex-column col-2 mb-2 me-2 align-items-center">
                <h3>Display</h3>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#dashboard-sale" data-bs-toggle="tab"><button
                            class="btn btn-outline-primary" checked style="width: 100px">Inventory</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dashboard-profit" data-bs-toggle="tab"><button
                            class="btn btn-outline-primary" style="width: 100px">Order/Stock</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dashboard-ranking" data-bs-toggle="tab"><button
                            class="btn btn-outline-primary" style="width: 100px" id="ranking-nav">Y o Y</button></a>
                </li>
            </ul>
            {{-- Display Sale, Profit and Ranking Tab Contents --}}
            <div class="tab-content container-fluid mb-2 me-2 border rounded-bottom-1">
                <div id="dashboard-sale" class="tab-pane" style="height: 400px">
                    <h1 class="text-center mt-2">Inventory</h1>
                    <div class="d-flex gap-2 overflow-auto" style="height: 300px">
                        <div class="my-auto" style="width:80%;">
                            <canvas id="doughnutChart-inventory"></canvas>
                        </div>
                        <table class="table table-hover align-middle bg-white text-secondary text-center"
                            style="width: 20%">
                            <thead class="small table-secondary text-secondary">
                                <tr>
                                    <th>Month Year</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td># 701 Test</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="dashboard-profit" class="tab-pane" style="height: 350px">
                    <h1 class="text-center mt-2">Order/Stock-curve</h1>
                    <div class="d-flex gap-2 overflow-auto" style="height: 300px">
                        <div class="my-auto" style="width:80%;">
                            <canvas id="mixedChart-orderstock"></canvas>
                        </div>
                        <table class="table table-hover align-middle bg-white text-secondary text-center"
                            style="width: 20%">
                            <thead class="small table-secondary text-secondary">
                                <tr>
                                    <th>Month Year</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="dashboard-ranking" class="tab-pane" style="height: 350px">
                    <h1 class="text-center mt-2">Year on Year</h1>
                    <div class="d-flex gap-2 overflow-auto" style="height: 300px">
                        <div class="my-auto" style="width:80%;">
                            <canvas id="mixedChart-yearonyear"></canvas>
                        </div>
                        <table class="table table-hover align-middle bg-white text-secondary text-center"
                            style="width: 20%">
                            <thead class="small table-secondary text-secondary">
                                <tr>
                                    <th>Month Year</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                                <tr>
                                    <td># 701</td>
                                    <td>YAMADA HANAKO</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        {{-- Term --}}
        <div class="d-flex term">
            <div class="col-2 text-center">
                <h3>Term</h3>
            </div>
            <div>
                <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Year" autocomplete="off">
                <label class="btn btn-outline-info mb-2" for="Year">Year</label>
                <div class="d-flex mb-2 gap-2">
                    <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="2020"
                        autocomplete="off">
                    <label class="btn btn-outline-info mb-2" for="2020">2020</label>
                    <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="2021"
                        autocomplete="off">
                    <label class="btn btn-outline-info mb-2" for="2021">2021</label>
                    <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="2022"
                        autocomplete="off">
                    <label class="btn btn-outline-info mb-2" for="2022">2022</label>
                    <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="2023"
                        autocomplete="off">
                    <label class="btn btn-outline-info mb-2" for="2023">2023</label>
                </div>
                <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Month" style="width: 100px"
                    autocomplete="off">
                <label class="btn btn-outline-info mb-2" for="Month">Month</label>
                <div class="mb-2">
                    <div class="d-flex gap-2">
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Jan"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Jan">Jan</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Feb"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Feb">Feb</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Mar"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Mar">Mar</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Apr"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Apr">Apr</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="May"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="May">May</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Jun"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Jun">Jun</label>
                    </div>
                    <div class="d-flex gap-2">
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Jul"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Jul">Jul</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Aug"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Aug">Aug</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Sep"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Sep">Sep</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Oct"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Oct">Oct</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Nov"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Nov">Nov</label>
                        <input type="checkbox" class="btn-check btn btn-outline-info mb-2" id="Dec"
                            autocomplete="off">
                        <label class="btn btn-outline-info mb-2" for="Dec">Dec</label>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
