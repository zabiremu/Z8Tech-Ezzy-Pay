<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Transcition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;


class TrenscitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transcition.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user= Transcition::latest()->get();
        return view('admin.transcition.trans_report',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'send_amount' => 'required',
            'receiver' => 'required',
        ]);

        $receiver = Str::lower($request->receiver);
        $user= User::where('username', $receiver)->first();

        if (!($user)) {
            throw ValidationException::withMessages([
                'receiver' => ['The provided username is incorrect.'],
            ]);
        }

        $transcition=new Transcition();
        $transcition->user_id= $user->id;
        $transcition->send_amount=$request->send_amount;
        $transcition->save();

        $sendMoney= Wallet::where('user_id',$user->id)->first();
        if(!$sendMoney)
        {
            $sendMoney=new Wallet();
            $sendMoney->user_id= $user->id;
            $sendMoney->booking_wallet= $request->send_amount + $sendMoney->booking_wallet;
            $sendMoney->save();
        }else{
            $sendMoney->user_id= $user->id;
            $sendMoney->booking_wallet= $request->send_amount + $sendMoney->booking_wallet;
            $sendMoney->save();
        }
       
        return redirect()->back()->with('success', 'Amount successfully send.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
