<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    private $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function store(Request $request)
    {
        //注文個数が在庫を超えないようなバリデーション？
        $request->validate([
            'product_detail_id' => 'required',
            'quantity'          => 'required',
        ]);

        //ゲストでなければ
        if (Auth::user()) {
            $this->cart->buyer_id = Auth::user()->id;
            $this->cart->product_detail_id = $request->detail;
            $this->cart->quantity = $request->quantity;
            $this->cart->store();

            return redirect()->route('buyer.cart');
        } else {
            return redirect()->back();
        }

    }
}
