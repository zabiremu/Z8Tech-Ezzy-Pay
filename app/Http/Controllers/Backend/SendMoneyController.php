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
use Illuminate\Support\Str;

class SendMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallet = Wallet::where('user_id',Auth::user()->id)->first();
        return view('users.send.index', compact('wallet'));
    }

    // myWalletTransferView
    public function myWalletTransferView(){
        $wallet = Wallet::where('user_id',Auth::user()->id)->first();
        return view('users.send.mywallet-send', compact('wallet'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function sendStore(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'user_id' => 'required',
            'send_amount' => 'required|numeric|min:100',
            'tpin' => 'required',
        ]);
        $authuser = User::where('id', Auth::user()->id)->first();
        $req_user_id = Str::lower($request->user_id);
        if((string)$authuser->username == (string)$req_user_id){
            return redirect()->back()->with('fail', 'you enter same username.');
        }else{     
            if((int)$authuser->t_pin == (int)$request->tpin){
                $user = User::where('username', $request->user_id)->first();            
                if (!$user) {
                    throw ValidationException::withMessages([
                        'user_id' => ['The provided user name is incorrect.'],
                    ]);
                }

                $friendsWallet= Wallet::where('user_id', $user->id)->first();            
                if(isset($friendsWallet))
                {
                    if($request->type == 'Booking Wallet')
                    {
                        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
                        if ($wallet->booking_wallet >= $request->send_amount) {

                            $wallet->booking_wallet = (int)$wallet->booking_wallet - (int)$request->send_amount;
                            $wallet->save();
                            
                            $friendsWallet->booking_wallet = (int)$friendsWallet->booking_wallet + (int)$request->send_amount;
                            $friendsWallet->save();
                            
                            $sendMoney = new SendMoneyForFriends();
                            $sendMoney->type= $request->type;
                            $sendMoney->user_id= $user->id;
                            $sendMoney->send_amount= $request->send_amount;
                            $sendMoney->tpin= $request->tpin;
                            $sendMoney->master_id= Auth::user()->id;
                            $sendMoney->save();
                        }else {
                            throw ValidationException::withMessages([
                                'send_amount' => ['Insufficient Funds in Booking Wallet'],
                            ]);
                        }                                    
                    }elseif($request->type == 'My Wallet'){
                        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
                        if ($wallet->my_wallet >= $request->send_amount) {
                            $wallet->my_wallet = (int)$wallet->my_wallet - (int)$request->send_amount;
                            $wallet->save();
                            
                            $friendsWallet->my_wallet= $friendsWallet->my_wallet + $request->send_amount;
                            $friendsWallet->save();
                            
                            $sendMoney = new SendMoneyForFriends();
                            $sendMoney->type= $request->type;
                            $sendMoney->user_id= $user->id;
                            $sendMoney->send_amount= $request->send_amount;
                            $sendMoney->tpin= $request->tpin;
                            $sendMoney->master_id= Auth::user()->id;
                            $sendMoney->save();
                        }else {
                            throw ValidationException::withMessages([
                                'errors' => ['Insufficient Funds in Booking Wallet'],
                            ]);
                        }
                    }
                        
                }

                return redirect()->back()->with('success', 'Balance Transfer successfully send.');
            }else{            
                return redirect()->back()->with('fail', 'T-PIN does not match.');
            }       
        }
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
