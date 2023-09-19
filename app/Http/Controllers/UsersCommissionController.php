<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersCommissionController extends Controller
{
    public function affiliate()
    {
        $userId=Auth::user();
        $wallet= Wallet::where('user_id',$userId->id)->first();
        return view('users.commission-table.affilateIndex',compact('wallet'));
        
    }

    public function levelIncome()
    {
        $userId=Auth::user();
        $wallet= Wallet::where('user_id',$userId->id)->first();
        return view('users.commission-table.levelIncome',compact('wallet'));
        
    }

    public function ezzyReturn()
    {
        $userId=Auth::user();
        $wallet= Wallet::where('user_id',$userId->id)->first();
        return view('users.commission-table.ezzyReturn',compact('wallet'));
        
    }

    public function ezzyReward()
    {
        $userId=Auth::user();
        $wallet= Wallet::where('user_id',$userId->id)->first();
        return view('users.commission-table.ezzyReward',compact('wallet'));
        
    }

    public function ezzyRoyality()
    {
        $userId=Auth::user();
        $wallet= Wallet::where('user_id',$userId->id)->first();
        return view('users.commission-table.ezzyRoyality',compact('wallet'));
        
    }

    public function groupBonous()
    {
        $userId=Auth::user();
        $wallet= Wallet::where('user_id',$userId->id)->first();
        return view('users.commission-table.ezzyRoyality',compact('wallet'));
        
    }
}
