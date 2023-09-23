<?php

namespace App\Http\Controllers\Admin;

use App\Models\SendMoney;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



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
