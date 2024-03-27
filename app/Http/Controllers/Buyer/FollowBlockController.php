<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Block;
use App\Models\User;
use \Illuminate\Pagination\Paginator;
use \Illuminate\Pagination\LengthAwarePaginator;

class FollowBlockController extends Controller
{
    //
    // function index(Request $request)
    // {   
    //     $followings = $this->setFollowers();
    //     $currentPageFollow = $request->input('follow_page', 1);
    //     // $data_follows = $this->paginate($followings, 1, null, ['path' => 'followinglist']);
    //     $data_follows = $this->paginate($followings, 1, $currentPageFollow, ['path' => $request->url(), 'query' => array_merge($request->query(), ['tab' => 'follow', 'follow_page' => $currentPageFollow])]);
        
    //     $blocks = $this->setBlocks();
    //     $currentPageBlock = $request->input('block_page', 1);
    //     // $data_blocks = $this->paginate($blocks, 1, null, ['path' => 'blocklist']);
    //     $data_blocks = $this->paginate($blocks, 1, $currentPageBlock, ['path' => $request->url(), 'query' => array_merge($request->query(), ['tab' => 'block', 'block_page' => $currentPageBlock])]);
    //     // return view('buyers.followblock', ['followings' => $data_follows, 'blocks' => $data_blocks]);
    //     return view('buyers.followblock', ['followings' => $data_follows, 'blocks' => $data_blocks, 'isBlock' => $request->session()->get('isBlock'), 'currentTab' => $request->input('tab', 'follow')]);
    // }

function index(Request $request)
{
    $followings = $this->setFollowers();
    $currentPageFollow = $request->input('follow_page', 1);
    $data_follows = $this->paginate($followings, 1, $currentPageFollow, [
        'path' => $request->url(),
        'query' => array_merge($request->query(), ['tab' => 'follow']),
        'pageName' => 'follow_page'
    ]);

    $blocks = $this->setBlocks();
    $currentPageBlock = $request->input('block_page', 1);
    $data_blocks = $this->paginate($blocks, 1, $currentPageBlock, [
        'path' => $request->url(),
        'query' => array_merge($request->query(), ['tab' => 'block']),
        'pageName' => 'block_page'
    ]);

    return view('buyers.followblock', [
        'followings' => $data_follows,
        'blocks' => $data_blocks,
    ]);
}

    function setFollowers()
    {   
        $following_names = [];
        $following_info;
        $followings = Follow::where('buyer_id', auth()->user()->id)->get();
        foreach($followings as $following)
        {
            $following_id = $following->seller_id;
            $following = User::where('id', $following_id)->first();
            $following_info = [
                'following_id' => $following_id,
                'following_name' => $following->username,
            ];
            
            array_push($following_names, $following_info);
        }

        return $following_names;
    }

    function setBlocks(){
        $block_names = [];
        $block_info;
        $blocks = Block::where('blocker_id', auth()->user()->id)->get();
        foreach($blocks as $block)
        {
            $blocked_id = $block->blocked_id;
            $blocked = User::where('id', $blocked_id)->first();
            $block_info = [
                'blocked_id' => $blocked_id,
                'blocked_name' => $blocked->username,
            ];
            
            array_push($block_names, $block_info);
        }

        return $block_names;
    }

    function removeFollow(Request $request)
    {
        $follow = Follow::where('buyer_id', auth()->user()->id)->where('seller_id', $request->seller_id)->first();
        $follow->delete();
        return redirect()->route('buyer.followblock');
    }

    function removeBlock(Request $request)
    {
        $block = Block::where('blocker_id', auth()->user()->id)->where('blocked_id', $request->blocked_id)->first();
        $block->delete();
        return redirect()->route('buyer.followblock');
    }

    private function paginate($items, $perPage = 3, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        return new LengthAwarePaginator(array_slice($items, ($page - 1) * $perPage, $perPage), count($items), $perPage, $page, $options);
    }
}
