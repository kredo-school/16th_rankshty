<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;

class CategoriesController extends Controller
{
    private $main_category;
    private $sub_category;

    public function __construct(MainCategory $main_category, SubCategory $sub_category)
    {
        $this->main_category = $main_category;
        $this->sub_category = $sub_category;
    }

    public function index(){
        $all_main_categories = $this->main_category->all();
        $all_sub_categories = $this->sub_category->all();

        return view('admin.category')
            ->with('all_main_categories', $all_main_categories)
            ->with('all_sub_categories', $all_sub_categories);
    }
}
