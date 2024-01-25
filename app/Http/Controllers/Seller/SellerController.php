<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function guide()
    {
        return view('users.seller.guide_page');
    }

    public function myPage()
    {
        return view('sellers.index');
    }

    public function draftlist()
    {
        return view('sellers.draftlist');
    }
}
