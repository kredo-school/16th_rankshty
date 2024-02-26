<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnectionController extends Controller
{
    public function buyerIndex() {
        return view('buyers.connection');
    }

    public function sellerIndex() {
        return view('sellers.connection');
    }
}
