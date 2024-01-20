<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BuyerController extends Controller
{
    public function index()
    {
        return view('buyers.index');
    }

    public function show()
    {
        return view('buyers.reviewspage');
    }
}
