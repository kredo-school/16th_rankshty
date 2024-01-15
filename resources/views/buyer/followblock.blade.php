@extends('layouts.app')

@section('title', 'Buyer: Follow/Block List')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Follow/Block List</h1>

        <div class="d-flex">

            {{-- followblock Tab --}}
            <ul class="nav flex-column col-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#follow" data-bs-toggle="tab">Follow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#block" data-bs-toggle="tab">Block</a>
                </li>
            </ul>

            {{-- followblock Tab Contents --}}
            <div class="tab-content container-fluid p-0 border rounded-bottom-1">
                <div id="follow" class="tab-pane active">
                    <table class="table table-hover align-migddle bg-white text-secondary text-center">
                        <thead class="small table-secondary text-secondary">
                            <tr>
                                <th>USER ID</th>
                                <th>USER NAME</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align:middle">
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td><button class="btn btn-info" style="width: max-content; height:max-content"><i
                                            class="fa-solid fa-circle-xmark">
                                            REMOVE</i></button>
                                </td>
                            </tr>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td><button class="btn btn-info" style="width: max-content; height:max-content"><i
                                            class="fa-solid fa-circle-xmark">
                                            REMOVE</i></button>
                                </td>
                            </tr>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td><button class="btn btn-info" style="width: max-content; height:max-content"><i
                                            class="fa-solid fa-circle-xmark">
                                            REMOVE</i></button>
                                </td>
                            </tr>
                            <tr>
                                <td># 701</td>
                                <td>YAMADA HANAKO</td>
                                <td><button class="btn btn-info" style="width: max-content; height:max-content"><i
                                            class="fa-solid fa-circle-xmark">
                                            REMOVE</i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation follow">
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
                <div id="block" class="tab-pane">
                    <table class="table table-hover align-migddle bg-white text-secondary text-center">
                        <thead class="small table-secondary text-secondary">
                            <tr>
                                <th>USER ID</th>
                                <th>USER TAROU</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align:middle">
                            <tr>
                                <td># 107</td>
                                <td>YAMADA TAROU</td>
                                <td><button class="btn btn-info" style="width: max-content; height:max-content"><i
                                            class="fa-solid fa-circle-xmark">
                                            REMOVE</i></button>
                                </td>
                            </tr>
                            <tr>
                                <td># 107</td>
                                <td>YAMADA TAROU</td>
                                <td><button class="btn btn-info" style="width: max-content; height:max-content"><i
                                            class="fa-solid fa-circle-xmark">
                                            REMOVE</i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation block">
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
            </div>
        </div>
    </div>

@endsection
