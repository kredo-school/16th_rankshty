<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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

    public function productRegistry()
    {
        return view('sellers.productRegistry');
    }

    public function draftlist()
    {
        return view('sellers.draftlist');
    }

    public function productsList()
    {
        return view('sellers.productslist');
    }

    public function ranking()
    {
        return view('sellers.ranking');
    }

    public function report()
    {
        return view('sellers.report');
    }
    
    public function help()
    {
        return view('sellers.help');
    }

    public function contact()
    {
        return view('sellers.contact');
    }
}

