<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
