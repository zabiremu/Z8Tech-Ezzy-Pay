<?php

namespace App\Http\Controllers\Admin;

use App\Models\SendMoney;
use Illuminate\Http\Request;
use App\Models\SendMoneyForFriends;
use App\Http\Controllers\Controller;
use App\Models\Convert;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.report.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sendMoney= SendMoneyForFriends::where('master_id', Auth::user()->id)->get();
        return view('users.transcition.sendRecord',compact('sendMoney'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function receiver()
    {
        $sendMoney= SendMoneyForFriends::where('user_id', Auth::user()->id)->get();
        return view('users.transcition.rechiver',compact('sendMoney'));
    }

      /**
     * Store a newly created resource in storage.
     */
    public function convert()
    {
        $sendMoney= Convert::where('user_id', Auth::user()->id)->get();
        return view('users.transcition.convert',compact('sendMoney'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $data = SendMoney::with('users')
            ->latest()
            ->get();
        return view('users.transcition.addfund', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
