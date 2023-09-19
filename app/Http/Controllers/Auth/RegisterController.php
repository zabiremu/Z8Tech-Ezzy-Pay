<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    ///protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function registered(Request $request, $user)
    {
        //dd($user);
        if ($user->is_admin == 1) {
            return redirect()->route('admin.dashboard.index'); // Replace 'admin.dashboard' with your admin dashboard route name
        } else {
            return redirect()->route('users.dashboard'); // Replace 'user.dashboard' with your user dashboard route name
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255', 'unique:users,username'],
            'bank_id' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'tpin' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'same:retype_password'],
            'password' => ['required', 'string', 'min:8', 'same:retype_password'],
            'reference_id' => ['required','reference_id_not_match'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'username' => $data['user_name'],
            'bank' => $data['bank_id'],
            'phone_no' => $data['phone'],
            't_pin' => $data['tpin'],
            'sponsor' => $data['reference_id'],
            'password' => Hash::make($data['password']),
            'sponsor' => $data['reference_id'],
        ]);
    }
}
