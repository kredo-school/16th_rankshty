<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function contentManagement()
    {
        return view('admin.contentmanagement');
    }

    public function contentManagementDetails()
    {
        return view('admin.contentmanagementdetails');
    }

    public function category()
    {
        return view('admin.category');
    }

}
