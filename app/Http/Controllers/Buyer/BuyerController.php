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

<<<<<<< HEAD
=======
    public function reviewPage()
    {
        return view('buyers.reviewpage');
    }

    public function favorite()
    {
        return view('buyers.favorite');
    }

>>>>>>> main
    public function service()
    {
        return view('users.buyer.terms_of_service');
    }


}
