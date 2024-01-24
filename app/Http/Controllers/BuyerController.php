<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function help()
    {
        return view('users/buyer/help_page');
    }
}
