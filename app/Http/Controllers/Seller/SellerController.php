<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function guide()
    {
        return view('seller.guide');
    }

    public function productsList()
    {
        return view('sellers.productslist');
    }
}
