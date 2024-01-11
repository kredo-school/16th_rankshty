@extends('layouts.app')

@section('title', 'Admin: User Management')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">User Management</h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary">
                <tr>
                    <th>USER ID</th>
                    <th>USER NAME</th>
                    <th>ROLE</th>
                    <th>LAST LOGIN</th>
                    <th>LAST LOGOUT</th>
                    <th>CREATED AT</th>
                    <th>DELETED AT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        # 701
                    </td>
                    <td>
                        YAMADA HANAKO
                    </td>
                    <td>Seller</td>
                    <td>2023/01/01 08:30</td>
                    <td>2023/01/01 08:30</td>
                    <td>2023/01/01 08:30</td>
                    <td>2023/01/01 08:30</td>
                </tr>
                <tr>
                    <td>
                        # 701
                    </td>
                    <td>
                        YAMADA HANAKO
                    </td>
                    <td>Seller</td>
                    <td>2023/01/01 08:30</td>
                    <td>2023/01/01 08:30</td>
                    <td>2023/01/01 08:30</td>
                    <td>2023/01/01 08:30</td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link page-arrow-disabled" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item checked"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link page-arrow" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
