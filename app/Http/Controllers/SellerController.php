<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function guide()
    {
        return view('users.sellers.guidepage');
    }

    public function review()
    {
        return view('users.sellers.reviewpage');
    }
}
