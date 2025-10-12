<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use BenSampo\Enum\Rules\EnumValue;
use App\Enums\ProductStatus;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use App\Models\ProductDetail;

class SellerController extends Controller
{
    public function guide()
    {
        return view('sellers.guide_page');
    }

    public function myPage()
    {
        return view('sellers.index');
    }

    public function productRegistry()
    {
        return view('sellers.productRegistry');
    }

    public function draftlist()
    {
        return view('sellers.draftlist');
    }

    public function ranking()
    {
        return view('sellers.ranking');
    }

    public function report()
    {
        return view('sellers.report');
    }

    public function help()
    {
        return view('sellers.help');
    }

    public function contact()
    {
        return view('sellers.contact');
    }

    public function orderManagementDashboard()
    {
        return view('sellers.ordermanagementdashboard');

    }

    public function reviews()
    {
        return view('users.seller.reviews');
    }

    //　一覧表示
    public function index(Request $request)
    {
        // ログインユーザーの出品物のみ、詳細とカテゴリをまとめてロード（N+1防止）
        $products = Product::with(['details', 'categories'])
            ->where('seller_id', auth()->id())
            ->latest('id')
            ->paginate(10);

        return view('sellers.products.index', compact('products'));
    }

    //　登録フォーム表示
    public function create()
    {
        return view('sellers.products.create');
}

    //　登録処理
    public function store(Request $request)
    {
        //バリデーション
        $validated = $request->validate
        ([
            'status' => ['required' , new EnumValue(ProductStatus::class, false)],//← 第2引数 false
            'product_name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'stock_quantity' => ['required', 'integer', 'min:0'],
            'unit_price' => ['required', 'numeric','min:0'],
            'product_size' => ['required', 'string'],
            'product_color' => ['required', 'string'],
            'description' => ['required', 'string', 'max:2000'],
            'picture_1' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'picture_2' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'picture_3' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'picture_4' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'picture_5' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
        ]);

        $sellerId = Auth::id(); // = auth()->id()
        if(!$sellerId)
        {
            return redirect()->route('login')->withErrors('ログインが必要です');
        }

         // 1) カテゴリを用意（main_categories）
          $category = Category::firstOrCreate(['name' => $validated['name']]);

         // 2) products用の値だけを抽出
          $productData = Arr::only($validated, [
            'status', 'product_name', 'description',
          ]);
          $productData['seller_id'] = $sellerId; // ← Auth::id()取った値を使う

         // 画像保存
         foreach([1,2,3,4,5] as $i) 
         {
            $key = "picture_{$i}";
            if ($request->hasFile($key))
            {
                $productData["image_{$i}"] = $request->file($key)->store('images', 'public');
            }
         }

        // 3) Prodcut作成
        $product = Product::create($productData);

        // 4) pivotへ紐付け（1対多想定なら attach、置換なら sync）
        $product->categories()->sync([$category->id]);

        // 5) product_details用の値を抽出して保存
        $detailData =
        [
            'product_id'     => $product->id,
            'size'           => $validated['product_size'],
            'color'          => $validated['product_color'],
            'stock_quantity' => $validated['stock_quantity'],
            'unit_price'     => $validated['unit_price'],
        ];
        ProductDetail::create($detailData);

        //完了後に一覧画面に戻る
        return redirect()->route('seller.products.index')->with('success', '商品が登録されました');
    }
}

