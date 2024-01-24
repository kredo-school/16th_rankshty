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

    public function reviewPage()
    {
        return view('buyers.reviewpage');
    }

    public function service()
    {
        return view('users.buyers.terms_of_service');
    }

    public function contact()
    {
        return view('users.buyer.contact_page');
    }
}
