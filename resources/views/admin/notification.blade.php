@extends('layouts.app')

@section('title', 'Admin: notification')

@section('content')
    <div class="justify-content-center rounded border">
        <h1 class="ps-3 mt-2">Notification</h1>

        {{-- Notification Writing Area --}}
        <form method="POST" action="#" accept-charset="UTF-8" class="m-2 border-bottom rounded-0 py-4">
            @csrf

            <label for="message"></label>
            <textarea name="notification" rows="3" id="notification" placeholder="Input message"
                style="width: calc(100% - 192px - 10px)"></textarea>
            <input type="submit" value="Add New" class="btn btn-primary">
        </form>

        {{-- Notification List by Card style --}}
        <div class="card mx-2 mt-2 border-0 border-bottom rounded-0">
            <div class="card-body">
                <h5 class="card-title">A system failure has occurred.</h5>
                <p class="card-text text-secondary">2023.12.20 21:40</p>
            </div>
        </div>
        <div class="card mx-2 mt-2 border-0 border-bottom rounded-0">
            <div class="card-body">
                <h5 class="card-title">A system failure has occurred.</h5>
                <p class="card-text text-secondary">2023.12.20 21:40</p>
            </div>
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-2">
            <nav aria-label="Page navigation notifications">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link border disabled" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
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

@endsection
