<?php

namespace App\Http\Controllers\Backend;

use App\Models\Wallet;
use App\Models\Convert;
use App\Models\WithDraw;
use App\Models\SendMoney;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.nogod.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ezzyreturn()
    {
        // dd('1');

        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->ezzy_return > 0) {
            //dd($wallet->ezzy_return);
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Ezzy Return';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->ezzy_return;
            $convert->save();
            $wallet->my_wallet = $wallet->ezzy_return + $wallet->my_wallet;
            $wallet->ezzy_return = $wallet->ezzy_return - $wallet->ezzy_return;
            $wallet->save();

        }

        return back();
    }
    public function levelbonus()
    {
        // dd('1');
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->level_bonus > 0) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Level bonus';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->level_bonus;
            $convert->save();

            $wallet->my_wallet = $wallet->level_bonus + $wallet->my_wallet;
            $wallet->level_bonus = $wallet->level_bonus - $wallet->level_bonus;
            $wallet->save();
        }
        return back();
    }

    public function affiliateIncome()
    {
        // dd('1');
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->affiliate_income > 0) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Affiliate Income';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->level_bonus;
            $convert->save();
            $wallet->my_wallet = $wallet->affiliate_income + $wallet->my_wallet;
            $wallet->affiliate_income = $wallet->affiliate_income - $wallet->affiliate_income;
            $wallet->save();
        }
        return back();
    }
    public function ezzyReward()
    {
        // dd('1');
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->ezzy_reward > 0) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Ezzy Reward';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->level_bonus;
            $convert->save();
            $wallet->my_wallet = $wallet->ezzy_reward + $wallet->my_wallet;
            $wallet->ezzy_reward = $wallet->ezzy_reward - $wallet->ezzy_reward;
            $wallet->save();
        }
        return back();
    }

    public function groupBonus()
    {
        // dd('1');
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->groupBonus > 0) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Group Bonus';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->level_bonus;
            $convert->save();
            $wallet->my_wallet = $wallet->groupBonus + $wallet->my_wallet;
            $wallet->groupBonus = $wallet->groupBonus - $wallet->groupBonus;
            $wallet->save();
        }
        return back();
    }
    public function ezzyRoyality()
    {
        // dd('1');
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->ezzy_royality > 0) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Ezzy Royality';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->level_bonus;
            $convert->save();
            $wallet->my_wallet = $wallet->ezzy_royality + $wallet->my_wallet;
            $wallet->ezzy_royality = $wallet->ezzy_royality - $wallet->ezzy_royality;
            $wallet->save();
        }
        return back();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $user = Auth::user();
        $transaction = new SendMoney();
        $transaction->user_id = $user->id;
        $transaction->tranx_id = $request->input('tranx_id');
        $transaction->send_amount = $request->input('send_amount');
        $transaction->user_number = $request->input('user_number');
        $transaction->type = 'Nogod';
        $transaction->save();

        return redirect()->route('users.dashboard');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function withDrawAmmount(Request $request)
    {
        $request->validate([
            'send_amount'=>'required',
        ]);

        if ($request->send_amount <= 50) {
            throw ValidationException::withMessages([
                'send_amount' => ['Minimum Withdraw 50tk+'],
            ]);
        }

        $user = Auth::user();
        $transaction = new WithDraw();
        $transaction->user_id = Auth::user()->id;
        $transaction->bank = $request->input('phone_number');
        $transaction->a_c = $request->input('tpin');
        $transaction->amount = $request->input('send_amount');
        $transaction->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function withDraw()
    {
        return view('users.withdraw.withDraw');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function PaymentProccessingwithDraw()
    {
        $withDraw= WithDraw::where('status',0)->latest()->get();
        return view('admin.withdraw.processing',compact('withDraw'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function PaymentApprovedwithDraw($id)
    {
        $withDraw= WithDraw::where('id',$id)->first();
        $withDraw->status= 1;
        $withDraw->save();
       

        $wallet= Wallet::where('user_id',$withDraw->user_id)->first();
        $wallet->my_wallet= $wallet->my_wallet - $withDraw->amount;
        $wallet->save();
        return back();
    }

    public function withDrawReject($id)
    {
        $withDraw= WithDraw::where('id',$id)->first();
        $withDraw->status= 2;
        $withDraw->save();
       
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function PaymentApproved()
    {
        $withDraw= WithDraw::where('status',1)->latest()->get();
        return view('admin.withdraw.accpect',compact('withDraw'));
    }

     /**
     * Remove the specified resource from storage.
     */
    public function reject()
    {
        $withDraw= WithDraw::where('status',2)->latest()->get();
        return view('admin.withdraw.reject',compact('withDraw'));
    }
}
