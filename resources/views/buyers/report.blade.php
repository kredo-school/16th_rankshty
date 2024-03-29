@extends('layouts.app')

@section('title', 'Buyer: Report')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Report Page</h1>

        {{-- Alert --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container">
            {{-- User ID --}}
            <form action="{{ route('buyer.complain', ['sender_id' => Auth::user()->id]) }}" method="post">
                @csrf

                <div class="form-group">

                    {{-- User ID --}}
                    <label for="report_userID">User ID</label>
                    <input type="number" class="form-control mb-3" id="report_userID" name="report_userID"
                        placeholder="Input User ID" required>

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
