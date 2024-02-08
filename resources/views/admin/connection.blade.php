@extends('layouts.app')

@section('title', 'Admin: Connection')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/admin_connection.css') }}">
@endpush


@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Connection</h1>

        <div class="d-flex">
            <div class="overflow-scroll">
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
            </div>

            {{-- Users Tab Contents --}}
            <div class="tab-content container-fluid p-0 border rounded-bottom-1">
                <div id="user_1" class="tab-pane active">
                    <div class="border">
                        <h4 class="ps-3 my-2"><i class="fa-regular fa-circle-user fa-2x me-1"></i><span>YAMADA
                                TAROU</span> </h4>
                    </div>
                    <div class="py-2 px-2 overflow-scroll">
                        <div class="left_display">
                            <div class="d-flex gap-2">
                                <p class="truncate">
                                    2021-11-03-23:03:56
                                </p>
                                <p>
                                    YAMADA HANAKO
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
                <div id="user_2" class="tab-pane">
                    <div class="border">
                        <h4 class="ps-3 my-2"><i class="fa-regular fa-circle-user fa-2x me-1"></i><span>YAMADA
                                HANAKO</span> </h4>
                    </div>
                    <div class="py-2 px-2 overflow-scroll">
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
                                    YAMADA HANAKO
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
        </div>
    </div>

@endsection
