<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnectionController extends Controller
{
    public function index() {
        return view('buyers.connection');
    }
}
