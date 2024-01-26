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

    public function complainhandling()
    {
        return view('admin.complainhandling');
    }

    public function complaindetail()
    {
        return view('admin.complaindetail');
    }

    public function category()
    {
        return view('admin.category');
    }

}
