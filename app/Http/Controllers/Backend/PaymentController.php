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
use App\Models\User;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.nogod.index');
    }

    public function bookingWallet()
    {
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->booking_wallet > 0) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Booking Wallet';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->booking_wallet;
            $convert->save();
            
            $wallet->my_wallet =  $wallet->my_wallet + $wallet->booking_wallet;
            $wallet->booking_wallet = $wallet->booking_wallet - $wallet->booking_wallet;
            $wallet->save();
        }
        return back()->with('success', 'Successfully Converted');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ezzyreturn()
    {
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($wallet->ezzy_return >= 100) {
            $convert= new Convert();
            $convert->user_id= Auth::user()->id;
            $convert->from= 'Ezzy Return';
            $convert->to= 'Ezzy Wallet';
            $convert->Amount= $wallet->ezzy_return;
            $convert->save();
            $wallet->my_wallet = $wallet->ezzy_return + $wallet->my_wallet;
            $wallet->ezzy_return = $wallet->ezzy_return - $wallet->ezzy_return;
            $wallet->save();
            return back()->with('success', 'Successfully Converted');
        }else{
            return back()->with('errors', 'Minimum balance will 100.');
        }
    }
    public function levelbonus()
    {
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
        return back()->with('success', 'Successfully Converted');
    }

    public function affiliateIncome()
    {
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
        return back()->with('success', 'Successfully Converted');
    }
    public function ezzyReward()
    {
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
        return back()->with('success', 'Successfully Converted');
    }

    public function groupBonus()
    {
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
        return back()->with('success', 'Successfully Converted');
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
        return back()->with('success', 'Successfully Converted');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tranx_id' => 'required',
            'send_amount' => 'required|numeric',
            'user_number' => 'required|numeric|digits:11',
        ]);
        $user = Auth::user();
        $transaction = new SendMoney();
        $transaction->user_id = $user->id;
        $transaction->tranx_id = $request->input('tranx_id');
        $transaction->send_amount = $request->input('send_amount');
        $transaction->user_number = $request->input('user_number');
        $transaction->type = 'Nagad';
        $transaction->save();

        return redirect()->route('users.dashboard')->with('success', 'Deposit request successfully send.');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function withDrawAmmount(Request $request)
    {
        $request->validate([
            'send_amount'=>'required|numeric|min:100|max:30000',
            'tpin'=>'required',
        ]);

        if ($request->send_amount <= 50) {
            throw ValidationException::withMessages([
                'send_amount' => ['Minimum Withdraw 1825 tk+'],
            ]);
        }

        $user_id = Auth::user()->id;

        $mywallet = Wallet::where('user_id', $user_id)->first();
        $main_balance = $mywallet->my_wallet;
        $withdraw_balance = $request->send_amount;
        
        if($main_balance <= $withdraw_balance){
            return redirect()->back()->with('fail', 'Insufficient Balance');
        }else{
            $current_balance = $main_balance - $withdraw_balance;
            $mywallet->update([
                'my_wallet' => $current_balance,
            ]);
            $transaction = new WithDraw();
            $transaction->user_id = Auth::user()->id;
            $transaction->bank = $request->input('phone_number');
            $transaction->a_c = $request->input('tpin');
            $transaction->amount = $request->input('send_amount');
            $transaction->save();

            return redirect()->back()->with('success', 'Withdraw request successfully send');
        }
    }

    /**
     * Display the specified resource.
     */
    public function withDraw()
    {
        return view('users.withdraw.withDraw');
    }

    // withDrawRequestEdit
    public function withDrawRequestEdit($id)
    {
        $withDraw = WithDraw::find($id);
        if($withDraw){
            $user = User::where('id', $withDraw->user_id)->first();
            return view('admin.processing.edit', compact('withDraw', 'user'));
        }
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
    public function PaymentApprovedwithDraw(Request $request, $id)
    {
        $request->validate([
            'transection_pin' => 'required',
        ]);

        $withDraw= WithDraw::where('id',$id)->first();
        $withDraw->transection_pin = $request->transection_pin;
        $withDraw->status= 1;
        $withDraw->save();    
        return redirect()->route('admin.send.pending.withdraw')->with('success', 'Withdraw request successfully approved');
    }

    public function withDrawReject($id)
    {
        $withDraw = WithDraw::where('id',$id)->first();
        if($withDraw){
            $userwallet = Wallet::where('id', $withDraw->user_id)->first();
            $userwallet->my_wallet = (int)$userwallet->my_wallet + (int)$withDraw->amount;
            $userwallet->save();

            $withDraw->status= 2;
            $withDraw->save();
        }
       
        return redirect()->back()->with('fail', 'Withdraw request successfully Rejected');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function PaymentApproved()
    {
        $withDraw = WithDraw::where('status',1)->latest()->get();
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

    // deposithistory
    public function deposithistory(){
        $id = Auth::user()->id;
        $records = SendMoney::where('user_id', $id)->get();
        return view('users.transcition.deposit', compact('records'));
    }
}
