<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SendMoney;
use App\Models\Wallet;
use Illuminate\Http\Request;

class AddFundReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SendMoney::with('users')
            ->latest()
            ->get();
        return view('admin.add_fund_report.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $sendMoney = SendMoney::find($id);
        $sendMoney->status = 1;
        $sendMoney->save();

        if($sendMoney)
        {
            $wallet= Wallet::where('user_id', $sendMoney->user_id)->first();
            if($wallet){
                $wallet->user_id = $sendMoney->user_id;
                $wallet->booking_wallet = (int)$wallet->booking_wallet + (int)$sendMoney->send_amount;
                $wallet->save();
            }else{
                $wallet= new Wallet();
                $wallet->user_id = $sendMoney->user_id;
                $wallet->booking_wallet = 0 + (int)$sendMoney->send_amount;
                $wallet->save();
            }
        }
        return redirect()->route('admin.add-fund-report.index')->with('success', 'Add Amount request successfully Added.');
    }

    /**
     * Display the specified resource.
     */
    public function reject(Request $request, $id)
    {
        $sendMoney = SendMoney::find($id);
        $sendMoney->status = 2;
        $sendMoney->save();
        return redirect()->route('admin.add-fund-report.index')->with('fail', 'Add Amount request successfully rejected.');
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
