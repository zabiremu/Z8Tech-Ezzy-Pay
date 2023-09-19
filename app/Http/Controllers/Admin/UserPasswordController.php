<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.password.password');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.password.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|min:8',
            'confirm_new_password' => 'required|string|min:8|same:new_password',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => ['The provided current password is incorrect.'],
            ]);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('users.dashboard')->with('success', 'Password updated successfully.');
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
        $request->validate([
            'tpin' => 'required',
            'new_tpin' => 'required|string|min:8|unique:users,t_pin',
            'confirm_tpin' => 'required|string|min:8|same:new_tpin',
        ]);

        $user = Auth::user();
        if ($request->tpin != $user->t_pin) {
            throw ValidationException::withMessages([
                'tpin' => ['The provided current tpin is incorrect.'],
            ]);
        }

        $user->update([
            't_pin' =>$request->new_tpin,
        ]);

        return redirect()->route('users.dashboard')->with('success', 'TPIN updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
