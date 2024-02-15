<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowerListController extends Controller
{
    public function index() {
        return view('sellers.follower-list');
    }
}
