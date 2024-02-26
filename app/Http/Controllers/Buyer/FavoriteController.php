<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    private $favorite;

    public function __construct(Favorite $favorite){
        $this->favorite = $favorite;
    }

    public function store($product_id){
        // $like = $this->like->where('user_id', Auth::user()->id)->where('post_id', $post_id)->first();

        // if($like){
        //     $like->where('user_id', Auth::user()->id)->where('post_id', $post_id)->delete();
        // }else{
            $this->favorite->user_id = Auth::user()->id;
            $this->favorite->product_id = $product_id;
            $this->favorite->save();
        // }

        return redirect()->back();
    }
}
