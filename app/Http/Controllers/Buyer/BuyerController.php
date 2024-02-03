<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BuyerController extends Controller
{
    public function myPage()
    {
        return view('buyers.index');
    }

    public function favorite()
    {
        return view('buyers.favorite');
    }

    public function service()
    {
        return view('users.buyer.terms_of_service');
    }

    public function contact()
    {
        return view('users.buyer.contact_page');
    }

    public function help()
    {
        return view('users.buyer.help_page');
    }

    public function checkout()
    {
        return view('buyers.checkout');
    }

    public function checkoutConfirm()
    {
        return view('buyers.checkout_confirm');
    }
    
    public function returnProducts()
    {
        return view('buyers.returnproducts');
    }

}
