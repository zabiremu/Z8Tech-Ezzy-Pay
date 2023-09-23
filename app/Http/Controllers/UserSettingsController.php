<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class UserSettingsController extends Controller
{
    // userSettings
    public function userSettings()
    {
        return view('users.password.index');
    }

    // userChangePasswordStore
    public function userChangePasswordStore(Request $request)
    {

        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8|same:confirm_new_password',
            'confirm_new_password' => 'required|min:8',
        ]);

        $user = User::where('id', Auth::user()->id)->first();

        if (!Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => ['The provided current password is incorrect.'],
            ]);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }

    // userChangeTPinStore
    public function userChangeTPinStore(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();

        $request->validate([
            'tpin' => 'required',
            'new_tpin' => 'required|numeric|min:4',
            'confirm_tpin' => 'required|numeric|min:4|same:new_tpin',
        ]);

        if ((int)$request->tpin != (int)$user->t_pin) {
            
            throw ValidationException::withMessages([
                'tpin' => ['The provided current tpin is incorrect.'],
            ]);
        }

        $user->update([
            't_pin' =>(int)$request->new_tpin,
        ]);

        return redirect()->back()->with('success', 'TPIN updated successfully.');
    }
}
