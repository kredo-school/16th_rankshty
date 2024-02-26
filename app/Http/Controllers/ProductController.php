<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    //buyer
    public function show($id)
    {
        $product = $this->product->findOrFail($id);

        return view('product')->with('product', $product);
    }

    public function ranking()
    {
        //売上順に並び替え？他のページは？
        $all_products = $this->product->all();

        return view('ranking')->with('all_products', $all_products);
    }

    //seller
    public function index()
    {
        $all_products = $this->product->all();

        return view('sellers.productslist')->with('all_products', $all_products);
    }

    public function softDelete($id)
    {
        $this->product->destroy($id);

        return redirect()->back();
    }

    public function draftlist()
    {
        $all_products = $this->product->all();
        // dd($all_products);
        // Product::with('category_products.category')->get()

        return view('sellers.draftlist')->with('all_products', $all_products);
    }

    public function sellersRanking()
    {
        $all_products = $this->product->all();

        return view('sellers.ranking')->with('all_products', $all_products);
    }

    //Admin
    public function adminRanking()
    {
        $all_products = $this->product->all();

        return view('admin.ranking')->with('all_products', $all_products);
    }

}
