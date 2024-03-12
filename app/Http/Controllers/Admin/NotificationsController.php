<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;

class NotificationsController extends Controller
{
    //
    public function index()
    {
        $information = $this->getInformation();
        return view('admin.notification', ['information' => $information]);
    }

    public function getInformation(){
        $information = Notification::where('action', 'Information')
            ->orderBy('created_at', 'desc')
            ->paginate(1);
        return $information;
    }

}