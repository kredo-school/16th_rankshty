@extends('layouts.app')

@section('title', 'Admin: Follower/Folloing List')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Follower/Folloing List</h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary">
                <tr>
                    <th>FOLLOWER ID</th>
                    <th>FOLLOWER NAME</th>
                    <th>FOLLOWING ID</th>
                    <th>FOLLOWING NAME</th>
                    <th>DATE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td># 701</td>
                    <td>YAMADA HANAKO</td>
                    <td># 738</td>
                    <td>YAMADA TAROU</td>
                    <td>2023/01/01</td>
                </tr>
                <tr>
                    <td># 701</td>
                    <td>YAMADA HANAKO</td>
                    <td># 738</td>
                    <td>YAMADA TAROU</td>
                    <td>2023/01/01</td>
                </tr>
                <tr>
                    <td># 701</td>
                    <td>YAMADA HANAKO</td>
                    <td># 738</td>
                    <td>YAMADA TAROU</td>
                    <td>2023/01/01</td>
                </tr>
                <tr>
                    <td># 701</td>
                    <td>YAMADA HANAKO</td>
                    <td># 738</td>
                    <td>YAMADA TAROU</td>
                    <td>2023/01/01</td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation followerfollowinglist">
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

@endsection
