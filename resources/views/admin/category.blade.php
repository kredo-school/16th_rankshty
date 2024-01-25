@extends('layouts.app')

@section('title', 'Admin: Category')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Category</h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary text-uppercase">
                <tr>
                    <th>id</th>
                    <th>icon</th>
                    <th>name</th>
                    <th>count</th>
                    <th>sub category</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>image</td>
                    <td>fashion</td>
                    <td>500</td>
                    <td>
                        <button class="btn btn-link text-black text-decoration-none p-0 btn-modal" data-bs-target="#subcategoryModalToggle" data-bs-toggle="modal">View</button>
                        @include('admin.modal.subcategory')
                    </td>
                    <td>
                        <button type="button" class="btn btn-link text-secondary text-decoration-none p-0 btn-modal" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                            DELETE
                        </button>
                        @include('admin.modal.deletecategory')
                    </td>
                </tr>
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

    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5 align-items-end">
            <div class="col">
                <input type="text" name="name" class="form-control mb-2" placeholder="Add Category name">
                <input type="file" name="icon" class="form-control">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>

@endsection
