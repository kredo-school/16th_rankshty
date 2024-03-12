@extends('layouts.app')

@section('title', 'Admin: notification')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-2">Notification</h1>

        {{-- Notification Writing Area --}}
        <form method="POST" action="#" accept-charset="UTF-8" class="m-2 border-bottom rounded-0 py-4">
            @csrf
            <div class="d-flex mx-auto gap-2 align-items-end">
                <label for="notification"></label>
                <textarea name="notification" rows="3" id="notification" placeholder="Input message"
                    style="width: calc(100% - 192px - 10px)"></textarea>

                <input type="submit" value="Add New" class="btn btn-primary">
            </div>
        </form>

        {{-- Notification List by Card style --}}
        @foreach ($information as $notification)
            <div class="card mx-2 mt-2 border-0 border-bottom rounded-0">
                <div class="card-body">
                    <h5 class="card-title">{{ $notification->info_text }}</h5>
                    <p class="card-text text-secondary">{{ $notification->created_at }}</p>
                </div>
            </div>
        @endforeach

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-2">
            {{ $information->links() }}
        </div>
    </div>

@endsection
