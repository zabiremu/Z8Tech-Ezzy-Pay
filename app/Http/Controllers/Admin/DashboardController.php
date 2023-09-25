<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Lavel1;
use App\Models\Lavel2;
use App\Models\Lavel3;
use App\Models\Lavel4;
use App\Models\Lavel5;
use App\Models\Lavel6;
use App\Models\Lavel7;
use App\Models\Lavel8;
use App\Models\Lavel9;
use App\Models\Wallet;
use App\Models\Lavel10;
use App\Models\Lavel11;
use App\Models\Lavel12;
use App\Models\Lavel13;
use App\Models\Lavel14;
use App\Models\Lavel15;
use App\Models\WithDraw;
use App\Models\SendMoney;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\AddFundReportController;
use App\Models\Transcition;
use App\Models\DailyBonusTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalUser= User::latest()->count();
        $totalActiveUser= User::where('is_approved',1)->latest()->count();
        $totalActiveWallet= Wallet::where('is_approved',1)->latest()->sum('my_wallet');
        
        $totalActivEzzy_reward= Wallet::where('is_approved',1)->latest()->sum('ezzy_reward');
        $totalActivGroup_bonus= Wallet::where('is_approved',1)->latest()->sum('group_bonus');
        $level_bonus= Wallet::where('is_approved',1)->latest()->sum('level_bonus');
        $ezzy_royality= Wallet::where('is_approved',1)->latest()->sum('ezzy_royality');
        $affiliate_income= Wallet::where('is_approved',1)->latest()->sum('affiliate_income');
        $ezzy_return= Wallet::where('is_approved',1)->latest()->sum('ezzy_return');
        $addFundPending= SendMoney::where('status',0)->latest()->count();
        $addFundComplete= SendMoney::where('status',1)->latest()->count();
        $WithDrawPending= WithDraw::where('status',0)->latest()->count();
        $WithDrawComplete= WithDraw::where('status',1)->latest()->count();
        $transcition= Transcition::sum('send_amount');

        $now = Carbon::now()->format('Y:m:d H:i:s');
        $today = Carbon::today()->addDay()->format('Y:m:d H:i:s');
        $daily_bonus_run = DailyBonusTime::latest()->first();
        $end = Carbon::parse($daily_bonus_run->daily_run_end);
        if($end->isPast()){
            $daily_bonus_run->update([
                'status'=> 0,
            ]);
        }else{
            $daily_bonus_run->update([
                'current_time'=> $now,
            ]);
        }
        if(isset($daily_bonus_run)){
            $start = Carbon::parse($daily_bonus_run->daily_run_begin);
            $now = Carbon::parse($daily_bonus_run->current_time);
            $end = Carbon::parse($daily_bonus_run->daily_run_end);
            $time_left = $end->diffForHumans($now);
        }else{
            $now = Carbon::now()->format('Y:m:d H:i:s');
            $today = Carbon::today()->addDay()->format('Y:m:d H:i:s');
            DailyBonusTime::create([
                'user_id'=> Auth::user()->id,
                'daily_run_begin'=> $now,
                'current_time'=> $now,
                'daily_run_end'=> $today,
                'status'=> 0,
            ]);
        }   

        return view('admin.dashboard',compact('totalUser','totalActiveUser','totalActiveWallet',
                'totalActivEzzy_reward','totalActivGroup_bonus','level_bonus','ezzy_royality',
                'affiliate_income','ezzy_return','addFundPending','addFundComplete','WithDrawComplete',
                'WithDrawPending','transcition'
            ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daily_bonus_run = DailyBonusTime::latest()->first();

        $now = Carbon::now()->format('Y:m:d H:i:s');
        $today = Carbon::today()->addDay()->format('Y:m:d H:i:s');

        if($daily_bonus_run->status == 0){
            DailyBonusTime::create([
                'user_id'=> Auth::user()->id,
                'daily_run_begin'=> $now,
                'current_time'=> $now,
                'daily_run_end'=> $today,
                'status'=> 1,
            ]);

            $wallet = Wallet::where('is_approved', 1)->get();
            foreach ($wallet as $item) {
                $item->ezzy_return = 10 + $item->ezzy_return;
                $item->save();
            }
            return back()->with('success', 'ROI Successfully Send');
        }else{
            return back()->with('fail', 'Daily ROI already been taken.');
        }        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
