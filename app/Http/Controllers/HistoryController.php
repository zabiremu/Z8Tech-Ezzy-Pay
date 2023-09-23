<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SendMoneyForFriends;
use App\Models\Convert;

class HistoryController extends Controller
{
    // sendHistory
    public function sendHistory(){
        $sendMoney= SendMoneyForFriends::where('master_id', Auth::user()->id)->orderBy('created_at', "DESC")->get();
        return view('users.transcition.sendRecord',compact('sendMoney'));
    }

    // receivedHistory
    public function receivedHistory()
    {
        $sendMoney= SendMoneyForFriends::where('user_id', Auth::user()->id)->orderBy('created_at', "DESC")->get();
        return view('users.transcition.rechiver',compact('sendMoney'));
    }

    // convertedHistory
    public function convertedHistory()
    {
        $sendMoney= Convert::where('user_id', Auth::user()->id)->orderBy('created_at', "DESC")->get();
        return view('users.transcition.convert',compact('sendMoney'));
    }
}
