<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
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

    public function userProfile()
    {
        return view('users.profile.index');
    }

    public function updateProfile()
    {
        return view('users.profile.update_profile');
    }

    public function updateInfo(Request $request)
    {
        $user= Auth::user();
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $user = User::find($user->id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        if($request->image)
        {
            $user->image = saveImage($request->image, 'users');
        }
        if($request->nid1)
        {
            $user->nid1 = saveImage($request->nid1, 'users');
        }
        if($request->nid2)
        {
            $user->nid2 = saveImage($request->nid2, 'users');
        }
        $user->save();
        return redirect()->route('users.profile')->with('success', "Profile Successfully updated.");
    }
}
