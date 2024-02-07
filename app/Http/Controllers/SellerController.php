<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function reviews()
    {
        return view('users.seller.reviews');
    }
}
