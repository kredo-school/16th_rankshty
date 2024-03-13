@extends('layouts.app')

@section('title', 'Admin: Follower/Following List')

@section('content')

    {{-- Backend --}}
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Follower/Following List</h1>
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
                @foreach ($followersFollowings as $followerFollowing)
                    <tr>
                        <td>{{ $followerFollowing['follower_id'] }}</td>
                        <td>{{ $followerFollowing['follower_name'] }}</td>
                        <td>{{ $followerFollowing['following_id'] }}</td>
                        <td>{{ $followerFollowing['following_name'] }}</td>
                        <td>{{ $followerFollowing['created_at']->format('Y/m/d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $followersFollowings->links() }}
        </div>
    </div>

@endsection
