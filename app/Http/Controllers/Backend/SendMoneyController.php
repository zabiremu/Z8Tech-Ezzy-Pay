<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Wallet;
use App\Models\SendMoney;
use Illuminate\Http\Request;
use App\Models\SendMoneyForFriends;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SendMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.send.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sendStore(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'user_id' => 'required',
            'send_amount' => 'required',
            'tpin' => 'required',
        ]);
        $user = User::where('username', $request->user_id)->first();
        if (!$user) {
            throw ValidationException::withMessages([
                'user_id' => ['The provided user name is incorrect.'],
            ]);
        }

        $wallet = Wallet::where('user_id', Auth::user()->id)->first();

        if ($wallet->my_wallet >= $request->send_amount) {
            $wallet->my_wallet = $wallet->my_wallet - $request->send_amount;
            $wallet->save();
            $friendsWallet= Wallet::where('user_id', $user->id)->first();
            if(isset($friendsWallet))
            {
                if($request->type == 'Booking Wallet')
                {
                    $friendsWallet->booking_wallet=   $friendsWallet->booking_wallet + $request->send_amount;
                    $friendsWallet->save();

                    $sendMoney = new SendMoneyForFriends();
                    $sendMoney->type= $request->type;
                    $sendMoney->user_id= $user->id;
                    $sendMoney->send_amount= $request->send_amount;
                    $sendMoney->tpin= $request->tpin;
                    $sendMoney->master_id= Auth::user()->id;
                    $sendMoney->save();

                }elseif($request->type == 'Ezzy Wallet'){
                    $friendsWallet->my_wallet=   $friendsWallet->my_wallet + $request->send_amount;
                    $friendsWallet->save();

                    $sendMoney = new SendMoneyForFriends();
                    $sendMoney->type= $request->type;
                    $sendMoney->user_id= $user->id;
                    $sendMoney->send_amount= $request->send_amount;
                    $sendMoney->tpin= $request->tpin;
                    $sendMoney->master_id= Auth::user()->id;
                    $sendMoney->save();
                }
            }else{
                $friendsWallet= new Wallet();
                if($request->type == 'Booking Wallet')
                {
                    $friendsWallet->user_id=$user->id;
                    $friendsWallet->booking_wallet=   $friendsWallet->booking_wallet + $request->send_amount;
                    $friendsWallet->save();

                    $sendMoney = new SendMoneyForFriends();
                    $sendMoney->type= $request->type;
                    $sendMoney->user_id= $user->id;
                    $sendMoney->send_amount= $request->send_amount;
                    $sendMoney->tpin= $request->tpin;
                    $sendMoney->master_id= Auth::user()->id;
                    $sendMoney->save();

                }elseif($request->type == 'Ezzy Wallet'){
                    $friendsWallet->user_id=$user->id;
                    $friendsWallet->my_wallet=   $friendsWallet->my_wallet + $request->send_amount;
                    $friendsWallet->save();

                    $sendMoney = new SendMoneyForFriends();
                    $sendMoney->type= $request->type;
                    $sendMoney->user_id= $user->id;
                    $sendMoney->send_amount= $request->send_amount;
                    $sendMoney->tpin= $request->tpin;
                    $sendMoney->master_id= Auth::user()->id;
                    $sendMoney->save();
                }
            }
          
            
            
        } else {
            throw ValidationException::withMessages([
                'send_amount' => ['Insufficient Funds in a My Wallet'],
            ]);
        }

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $transaction = new SendMoney();
        $transaction->user_id = $user->id;
        $transaction->tpin = $request->input('tpin');
        $transaction->send_amount = $request->input('send_amount');
        $transaction->receiver = $request->input('receiver');
        $transaction->type = $request->input('sender_wallet_id');
        $transaction->save();

        // Redirect to the index page or show a success message
        return redirect()
            ->route('users.dashboard')
            ->with('success', 'Transaction created successfully');
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
