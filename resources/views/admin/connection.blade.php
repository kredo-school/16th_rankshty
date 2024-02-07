@extends('layouts.app')

@section('title', 'Admin: Connection')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Connection</h1>

        <div class="d-flex">

            {{-- Users Tab --}}
            <ul class="nav flex-column col-2 text-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#user_1" data-bs-toggle="tab">
                        <i class="fa-regular fa-circle-user fa-2x"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#user_2" data-bs-toggle="tab"><i
                            class="fa-regular fa-circle-user fa-2x"></i></a>
                </li>
            </ul>

            {{-- Users Tab Contents --}}
            <div class="tab-content container-fluid p-0 border rounded-bottom-1">
                <div id="user_1" class="tab-pane active">
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

                </div>
                <div id="user_2" class="tab-pane">
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


                </div>
            </div>
        </div>
    </div>

@endsection
