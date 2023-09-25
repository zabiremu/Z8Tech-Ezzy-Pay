<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use App\Models\SendMoney;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Superadmin
        User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            't_pin' => '1111',
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'is_users' => 0,
            'is_approved' => 1,
            'nid_verified'=>1,
        ]);

        SendMoney::create([
            'user_id' => '1',
            'user_number' => '01833086035',
            'send_amount' => '2000',
            'tranx_id' => '123456789',
            'type' => 'Nagad',
            'status' => '0',
        ]);

        // Pay User
        User::create([
            'first_name' => 'mfs',
            'last_name' => 'pay',
            'username' => 'mfspay',
            "phone_no" => "01833080706",
            'email' => 'mfspay@gmail.com',
            'sponsor' => 'superadmin',
            't_pin' => '1234',
            'password' => Hash::make('password'),
            'is_users' => 1,
            'is_approved' => 1,
            'nid_verified'=>1,
        ]);
        SendMoney::create([
            'user_id' => '2',
            'user_number' => '01833086035',
            'send_amount' => '2000',
            'tranx_id' => '123456789',
            'type' => 'Nagad',
            'status' => '0',
        ]);
        Wallet::create([
            'user_id' => '1',
            'booking_wallet' => 0,
            'is_approved' => 1,
        ]);
        Wallet::create([
            'user_id' => '2',
            'booking_wallet' => 5000,
            'is_approved' => 1,
        ]);
        // User 

        // User 1
        User::create([
            'first_name'=> 'user',
            'last_name'=> '1',
            'username'=> 'user1',
            "phone_no" => "01833080706",
            'email'=> 'user1@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        SendMoney::create([
            'user_id'=> '3',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 2
        User::create([
            'first_name'=> 'user',
            'last_name'=> '1',
            'username'=> 'user2',
            "phone_no" => "01833080706",
            'email'=> 'user2@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '4',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 3
        User::create([
            'first_name'=> 'user',
            'last_name'=> '3',
            'username'=> 'user3',
            "phone_no" => "01833080706",
            'email'=> 'user3@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '5',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 4
        User::create([
            'first_name'=> 'user',
            'last_name'=> '4',
            'username'=> 'user4',
            "phone_no" => "01833080706",
            'email'=> 'user4@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        SendMoney::create([
            'user_id'=> '6',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 5
        User::create([
            'first_name'=> 'user',
            'last_name'=> '5',
            'username'=> 'user5',
            "phone_no" => "01833080706",
            'email'=> 'user5@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        SendMoney::create([
            'user_id'=> '7',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 6
        User::create([
            'first_name'=> 'user',
            'last_name'=> '6',
            'username'=> 'user6',
            "phone_no" => "01833080706",
            'email'=> 'user6@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '8',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 7
        User::create([
            'first_name'=> 'user',
            'last_name'=> '7',
            'username'=> 'user7',
            "phone_no" => "01833080706",
            'email'=> 'user7@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '9',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 8
        User::create([
            'first_name'=> 'user',
            'last_name'=> '8',
            'username'=> 'user8',
            "phone_no" => "01833080706",
            'email'=> 'user8@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '10',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User9
        User::create([
            'first_name'=> 'user',
            'last_name'=> '9',
            'username'=> 'user9',
            "phone_no" => "01833080706",
            'email'=> 'user9@gmail.com',
            'sponsor'=> 'mfspay',
            't_pin' => '1234',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '11',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User 10
        User::create([
            'first_name'=> 'User',
            'last_name'=> '10',
            'username'=> 'user10',
            "phone_no" => "01833080706", 
            'email'=> 'user10@gmail.com',
            't_pin' => '1234',
            'sponsor'=> 'mfspay',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        SendMoney::create([
            'user_id'=> '12',
            'user_number'=> '01833086035',
            'send_amount'=> '2000',
            'tranx_id'=> '123456789',
            'type'=> 'Nagad',
        ]);

        // User::create([
        //     'first_name'=> 'tofail',
        //     'last_name'=> 'mz',
        //     'username'=> 'tofailmz',
        //     'email'=> 'tofail@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '13',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);

        // User::create([
        //     'first_name'=> 'tuhin',
        //     'last_name'=> 'emu',
        //     'username'=> 'tuhinemu',
        //     'email'=> 'tuhin@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '14',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);


        // User::create([
        //     'first_name'=> 'Jhon-1',
        //     'last_name'=> 'doe',
        //     'username'=> 'jhon-doe-1',
        //     'email'=> 'user1@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);



        // SendMoney::create([
        //     'user_id'=> '15',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'Jhon-2',
        //     'last_name'=> 'doe',
        //     'username'=> 'jhon-doe-2',
        //     'email'=> 'user2@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '16',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'tuhin-1',
        //     'last_name'=> 'emu',
        //     'username'=> 'tuhinemu-1',
        //     'email'=> 'tuhin2@gmail.com',
        //     'sponsor'=> 'tuhinemu',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '17',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'tuhin-2',
        //     'last_name'=> 'emu',
        //     'username'=> 'tuhinemu-12',
        //     'email'=> 'tuhin22@gmail.com',
        //     'sponsor'=> 'tuhinemu',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '18',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);


        // User::create([
        //     'first_name'=> 'tofail-1',
        //     'last_name'=> 'mz',
        //     'username'=> 'tofailmz-1',
        //     'email'=> 'tofail2@gmail.com',
        //     'sponsor'=> 'tofailmz',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '19',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'tofail-12',
        //     'last_name'=> 'mz',
        //     'username'=> 'tofailmz-12',
        //     'email'=> 'tofail212@gmail.com',
        //     'sponsor'=> 'tofailmz',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '20',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'raihan1',
        //     'last_name'=> 'emu',
        //     'username'=> 'raihan-emu-1-2',
        //     'email'=> 'raihan241@gmail.com',
        //     'sponsor'=> 'raihan-emu-1',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '21',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'raihan12',
        //     'last_name'=> 'emu',
        //     'username'=> 'raihan-emu-1-4',
        //     'email'=> 'raihan221@gmail.com',
        //     'sponsor'=> 'raihan-emu-1',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '22',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'raihan13',
        //     'last_name'=> 'emu',
        //     'username'=> 'raihan-emu-1-3',
        //     'email'=> 'raihan213@gmail.com',
        //     'sponsor'=> 'raihan-emu-1',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '23',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '2000',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);

    }
}
