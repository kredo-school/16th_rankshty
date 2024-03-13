<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Enums\ActionType;

class NotificationsController extends Controller
{
    //
    public function index()
    {
        $information = $this->getInformation();
        return view('admin.notification', ['information' => $information]);
    }

    public function getInformation(){
        $information = Notification::where('action', ActionType::search(7))
            ->orderBy('created_at', 'desc')
            ->paginate(1);
        return $information;
    }

    public function store(Request $request)
    {
        $notification = new Notification();
        $notification->user_id = $request->user_id;
        $notification->action = ActionType::search(7);
        $notification->info_text = $request->notification;
        $notification->save();
        return redirect()->back();
    }

}