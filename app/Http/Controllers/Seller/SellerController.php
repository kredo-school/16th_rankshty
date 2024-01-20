<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{

    public function guide()
    {
        return view('users.sellers.guide_page');

    }

    public function myPage()
    {
        return view('sellers.index');
    }
}