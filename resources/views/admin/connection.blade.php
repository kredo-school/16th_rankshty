@extends('layouts.app')

@section('title', 'Admin: Connection')
<style>
    a:link,
    a:visited,
    a:hover,
    a:active {
        color: black;
    }

    .left_display {
        position: relative;
        width: 50%;
    }

    .left_display div p {
        text-align: left;
        font-size: 0.5rem
    }

    .right_display {
        position: relative;
        left: 50%;
        width: 50%;
    }

    .right_display div p {
        text-align: right;
        font-size: 0.5rem
    }

    .right_display div .message {
        background-color: #DADADA;
    }

    h4 span {
        text-align: center;
    }
</style>


@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Connection</h1>

        <div class="d-flex">

            {{-- Users Tab --}}
            <ul class="nav flex-column col-3 text-center">
                <li class="nav-item text-black">
                    <a class="nav-link active" aria-current="page" href="#user_1" data-bs-toggle="tab">
                        <i class="fa-regular fa-circle-user fa-2x me-1"></i>YAMADA TAROU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#user_2" data-bs-toggle="tab"><i
                            class="fa-regular fa-circle-user fa-2x me-1"></i>YAMADA HANAKO</a>
                </li>
            </ul>

            {{-- Users Tab Contents --}}
            <div class="tab-content container-fluid p-0 border rounded-bottom-1">
                <div id="user_1" class="tab-pane active">
                    <div>
                        <div class="header border">
                            <h4 class="ps-3 my-2"><i class="fa-regular fa-circle-user fa-2x me-1"></i><span>YAMADA
                                    TAROU</span> </h4>
                        </div>
                        <div class="body py-2 px-2">
                            <div class="left_display">
                                <div class="d-flex gap-2">
                                    <p class="truncate">
                                        2021-11-03-23:03:56
                                    </p>
                                    <p>
                                        YAMADA TAROU
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa-regular fa-circle-user fa-2x me-1"></i>
                                    <p class="border rounded p-2">USER EMAIL:</p>
                                </div>
                            </div>
                            <div class="right_display">
                                <div class="d-flex gap-2 justify-content-end">
                                    <p class="truncate">
                                        2021-11-03-23:03:56
                                    </p>
                                    <p>
                                        YAMADA TAROU
                                    </p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p class="border rounded p-2 message">USER EMAIL:</p>
                                    <i class="fa-regular fa-circle-user fa-2x me-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

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
