@extends('layouts.app')

@section('title', 'Buyer: Report')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-1">Report Page</h1>

        <div class="container">
            {{-- User ID --}}
            <form action="#" method="post">
                @csrf

                <div class="form-group">

                    {{-- User ID --}}
                    <label for="report_userID">User ID</label>
                    <input class="form-control mb-3" id="report_userID" name="report_userID" placeholder="Input Product ID">

                    {{-- Product ID --}}
                    <label for="report_productID">Product ID</label>
                    <input class="form-control mb-3" id="report_productID" name="report_productID"
                        placeholder="Input Product ID">

                    {{-- Reason --}}
                    <label for="report_reason">Reason</label>
                    <textarea class="form-control mb-5" id="report_reason" name="report_reason" rows="5" placeholder="Input Reason"></textarea>

                    {{-- Post --}}
                    <div class="d-flex justify-content-start mb-2">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>

                </div>
            </form>
        </div>

    @endsection
