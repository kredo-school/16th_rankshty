<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function service()
    {
        return view('users.buyers.terms_of_service');
    }

    public function help()
    {
        return view('users.buyers.helppage');
    }

    public function contact()
    {
        return view('users.buyers.contact');
    }
}
