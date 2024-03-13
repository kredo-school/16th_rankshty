<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Follow;
use App\Models\User;
use \Illuminate\Pagination\Paginator;
use \Illuminate\Pagination\LengthAwarePaginator;

class FollowerFollowingListController extends Controller
{   

    public function setFolloerFollowingList()
    {   
        $followersFollowings = [];
        $followerFollowing;
        $follows = Follow::all();
        foreach ($follows as $follow) {
            $followerFollowing = [
                'follower_id' => $follow->buyer_id,
                'follower_name' => User::find($follow->buyer_id)->username,
                'following_id' => $follow->seller_id,
                'following_name' => User::find($follow->seller_id)->username,
                'created_at' => $follow->created_at
            ];
            array_push($followersFollowings, $followerFollowing);
        }

        return $followersFollowings;

    }

    public function index()
    {
        $followerFollowings = $this->setFolloerFollowingList();
        $data = $this->paginate($followerFollowings, 3, null, ['path' => 'followerfollowinglist']);
        return view('admin.followerfollowinglist', ['followersFollowings' => $data]);
    }

    private function paginate($items, $perPage = 3, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        return new LengthAwarePaginator(array_slice($items, ($page - 1) * $perPage, $perPage), count($items), $perPage, $page, $options);
    }

}
