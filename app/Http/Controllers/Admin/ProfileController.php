<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nid1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nid2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $user= Auth::user();
        $user = User::find($user->id);
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/users/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user['image'] = "$profileImage";
        }else{
            unset($request['image']);
        }

        if ($nid1 = $request->file('nid1')) {
            $destinationPath = 'uploads/nid/front';
            $profilenid1 = date('YmdHis') . "." . $nid1->getClientOriginalExtension();
            $nid1->move($destinationPath, $profilenid1);
            $user['nid1'] = "$profilenid1";
        }else{
            unset($request['nid1']);
        }

        if ($nid2 = $request->file('nid2')) {
            $destinationPath = 'uploads/nid/back';
            $profilenid2 = date('YmdHis') . "." . $nid2->getClientOriginalExtension();
            $nid2->move($destinationPath, $profilenid2);
            $user['nid2'] = "$profilenid2";
        }else{
            unset($request['nid2']);
        }
        
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->country = $request->input('country');
        $user->address = $request->input('address');

        $user->update();
        return redirect()->route('users.profile')->with('success', "Profile Successfully updated.");
    }
}
