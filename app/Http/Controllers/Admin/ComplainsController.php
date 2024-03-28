<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Support\Facades\Auth;

class ComplainsController extends Controller
{
    public function setReport(Request $request){
        $complain = new Complain();
        $complain->body = $request->report_reason;
        $complain->sender_id = $request->sender_id;
        $complain->user_id = $request->report_userID;
        $complain->product_id = $request->report_productID;
        $complain->save();
        return redirect()->back()->with('success', 'Report has been sent successfully');
    }
}