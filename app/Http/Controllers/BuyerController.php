<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function contact()
    {
        return view('users.buyer.contact_page');
    }
}
