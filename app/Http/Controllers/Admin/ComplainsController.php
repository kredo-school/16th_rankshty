<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ComplainsController extends Controller
{

    public function setReport(Request $request){

        $isExist = User::where('id', $request->report_userID)->exists();

        if(!$isExist){
            return redirect()->back()->with('error', 'User not found');
        }

        $complain = new Complain();
        $complain->body = $request->report_reason;
        $complain->sender_id = $request->sender_id;
        $complain->user_id = $request->report_userID;
        $complain->product_id = $request->report_productID;
        $complain->save();

        // if some troble happned in sending the report
        if(!$complain){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        return redirect()->back()->with('success', 'Report has been sent successfully');
    }
}