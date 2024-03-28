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
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->username }}
                        </td>
                        <td>{{ $user->role_id }}</td>
                        <td>{{ $user->last_login_at }}</td>
                        <td>{{ $user->last_logout_at }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->deleted_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>

@endsection
