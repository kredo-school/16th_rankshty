<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function review()
    {
        return view('users.seller.review');
    }
}
