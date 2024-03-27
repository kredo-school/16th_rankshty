@extends('layouts.app')

@section('title', 'Buyer: Follow/Block List')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Follow/Block List</h1>
        {{-- {{ dd($blocks) }} --}}

        <div class="d-flex followblock">

            {{-- followblock Tab
            <ul class="nav flex-column col-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#follow" data-bs-toggle="tab">Follow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#block" data-bs-toggle="tab">Block</a>
                </li>
            </ul> --}}
            {{-- Tab links --}}
            <ul class="nav flex-column col-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->input('tab', 'follow') == 'follow' ? 'active' : '' }}"
                        href="{{ request()->fullUrlWithQuery(['tab' => 'follow', 'follow_page' => $followings->currentPage()]) }}">Follow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->input('tab') == 'block' ? 'active' : '' }}"
                        href="{{ request()->fullUrlWithQuery(['tab' => 'block', 'block_page' => $blocks->currentPage()]) }}">Block</a>
                </li>
            </ul>

            {{-- followblock Tab Contents --}}
            <div class="tab-content container-fluid p-0 border rounded-bottom-1">

                {{-- <div id="follow" class="tab-pane {{ session('isBlock') ? '' : 'active' }}"> --}}
                <div id="follow" class="tab-pane {{ request()->input('tab', 'follow') == 'follow' ? 'active' : '' }}">
                    <table class="table table-hover align-migddle bg-white text-secondary text-center">
                        <thead class="small table-secondary text-secondary">
                            <tr>
                                <th>USER ID</th>
                                <th>USER NAME</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align:middle">
                            @foreach ($followings as $following)
                                <tr>
                                    <td>{{ $following['following_id'] }}</td>
                                    <td>{{ $following['following_name'] }}</td>
                                    <td>
                                        <form
                                            action="{{ route('buyer.followblock.romovefollow', ['seller_id' => $following['following_id']]) }}"
                                            method="post">
                                            @csrf
                                            <button class="btn btn-info"
                                                style="width: max-content; height:max-content; letter-spacing:1px"><i
                                                    class="fa-solid fa-circle-xmark">
                                                    REMOVE</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $followings->appends(['tab' => 'follow', 'block_page' => $blocks->currentPage()])->links() }}
                    </div>
                </div>

                <div id="block" class="tab-pane {{ request()->input('tab') == 'block' ? 'active' : '' }}">
                    <table class="table table-hover align-migddle bg-white text-secondary text-center">
                        <thead class="small table-secondary text-secondary">
                            <tr>
                                <th>USER ID</th>
                                <th>USER NAME</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align:middle">
                            @foreach ($blocks as $block)
                                <tr>
                                    <td>{{ $block['blocked_id'] }}</td>
                                    <td>{{ $block['blocked_name'] }}</td>
                                    <td>
                                        <form
                                            action="{{ route('buyer.followblock.romoveblock', ['blocked_id' => $block['blocked_id']]) }}"
                                            method="post">
                                            @csrf
                                            <button class="btn btn-info"
                                                style="width: max-content; height:max-content; letter-spacing:1px"><i
                                                    class="fa-solid fa-circle-xmark">
                                                    UNBLOCK</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $blocks->appends(['tab' => 'block', 'follow_page' => $followings->currentPage()])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
