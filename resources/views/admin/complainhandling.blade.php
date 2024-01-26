@extends('layouts.app')

@section('title', 'Admin: Complain handling')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Complain handling</h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary text-uppercase">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>product</th>
                    <th>type</th>
                    <th>user</th>
                    <th>date</th>
                    <th>details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>complaint</td>
                    <td></td>
                    <td>report</td>
                    <td>seller</td>
                    <td>2021.12.23</td>
                    <td>
                        <a href="{{ route('admin.complaindetail') }}" class="text-decoration-none fw-bold" style="color: #071657">View Details</a>
                    </td>
                </tr>
                {{-- @empty
                    <div class="bg-secondary-subtle">
                        <p>No complaints.</p>
                    </div>
                @endforelse --}}
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation usermanagement">
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
