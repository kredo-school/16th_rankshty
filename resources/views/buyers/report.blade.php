@extends('layouts.app')

@section('title', 'Buyer: Report')
@push('js')
    <script src="{{ asset('js/toast.js') }}"></script>
@endpush

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Report Page</h1>
        @if (session('success'))
            <div id="liveToast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif

        <div class="container">
            {{-- User ID --}}
            <form action="{{ route('buyer.complain', ['sender_id' => Auth::user()->id]) }}" method="post">
                @csrf

                <div class="form-group">

                    {{-- User ID --}}
                    <label for="report_userID">User ID</label>
                    <input class="form-control mb-3" id="report_userID" name="report_userID" placeholder="Input User ID"
                        required>

                    {{-- Product ID --}}
                    <label for="report_productID">Product ID</label>
                    <input class="form-control mb-3" id="report_productID" name="report_productID"
                        placeholder="Input Product ID">

                    {{-- Reason --}}
                    <label for="report_reason">Reason</label>
                    <textarea class="form-control mb-5" id="report_reason" name="report_reason" rows="5" placeholder="Input Reason"
                        required></textarea>

                    {{-- Post --}}
                    <div class="d-flex justify-content-start mb-2">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>

                </div>
            </form>
        </div>

    </div>

@endsection
