<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings= Setting::first();
        return view('admin.setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updateSetting()
    {
        $settings= Setting::first();
        return view('admin.setting.update',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSettings(Request $request)
    {
        Setting::skip(1)->update([
            'marquee_notice'=> $request->marquee_notice,
            'withdraw_time_close'=> $request-> withdraw_time_close,
            'withdraw_time_open'=> $request->withdraw_time_open ,
            'minimum_deposit'=>  $request->minimum_deposit,
            'minimum_transaction'=>  $request->minimum_transaction,
            'minimum_exchange'=>  $request->minimum_exchange,
            'trc20'=>  $request->trc20,
            'n_a'=> $request->n_a,
            'transaction_charge'=>  $request->transaction_charge,
            'decimal'=>  $request->decimal,
            'withdraw_charge'=>  $request->withdraw_charge,
            'maximum_withdraw'=>  $request->maximum_withdraw,
            'minimum_withdraw'=>  $request->minimum_withdraw,
            'registration'=>  $request->registration,
            'nogodPhoneNumber'=>  $request->nogodPhoneNumber,
            'ezzy_member'=>  500,
            'ezzy_leader'=> 2000 ,
            'manager'=> '10000',
            'executive'=> '35000',
            'director'=> '700000',
            'COE'=> '150000',
            'CEO'=> '300000',
        ]);

        return back()->with('success', 'Successfully updated');
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
