<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowBlockController extends Controller
{
    //
    function index()
    {
        return view('buyer.followblock');
    }
}
