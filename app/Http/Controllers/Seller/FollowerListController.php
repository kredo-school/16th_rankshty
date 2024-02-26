<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowerListController extends Controller
{
    public function index() {
        return view('sellers.follower-list');
    }
}
