<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::orderBy('id')->paginate(10);
        return view('admin.usermanagement', ['users' => $users]);
    }
}
