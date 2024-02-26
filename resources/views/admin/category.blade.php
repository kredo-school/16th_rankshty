@extends('layouts.app')

@section('title', 'Admin: Category')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Category</h1>
        <table class="table table-hover align-middle bg-white text-secondary text-center">
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
                @foreach ( $all_main_categories  as $main_category)
                    <tr>
                        <td>{{ $main_category->id }}</td>
                        <td>
                            <img src="{{ $main_category->image }}" alt="Category {{ $main_category->id }}" style="width: 9rem">
                        </td>
                        <td>{{ $main_category->name }}</td>
                        <td>{{ $main_category->categoryProduct->count() }}</td>
                        <td>
                            <button class="btn btn-link text-black text-decoration-none p-0 btn-modal" data-bs-target="#subcategory-{{ $main_category->id }}" data-bs-toggle="modal">View</button>
                            @include('admin.modal.subcategory')
                        </td>
                        <td>
                            <button type="button" class="btn btn-link text-secondary text-decoration-none p-0 btn-modal" data-bs-toggle="modal" data-bs-target="#deleteCategory-{{ $main_category->id }}">
                                DELETE
                            </button>
                            @include('admin.modal.deletecategory')
                        </td>
                    </tr>
                @endforeach
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
