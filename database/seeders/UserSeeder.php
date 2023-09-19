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
        User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'is_users' => 0,
            'is_approved' => 1,
            'nid_verified'=>1,
        ]);

        SendMoney::create([
            'user_id' => '1',
            'user_number' => '01833086035',
            'send_amount' => '1400',
            'tranx_id' => '123456789',
            'type' => 'Nogod',
            'status' => '1',
        ]);

        User::create([
            'first_name' => 'Jhon',
            'last_name' => 'doe',
            'username' => 'jhon-doe',
            'email' => 'user@gmail.com',
            'sponsor' => 'super-admin',
            'password' => Hash::make('password'),
            'is_users' => 1,
            'is_approved' => 1,
            'nid_verified'=>1,
        ]);

        SendMoney::create([
            'user_id' => '2',
            'user_number' => '01833086035',
            'send_amount' => '1400',
            'tranx_id' => '123456789',
            'type' => 'Nogod',
            'status' => '1',
        ]);

        Wallet::create([
            'user_id' => '1',
            'booking_wallet' => 0,
            'is_approved' => 1,
        ]);


        Wallet::create([
            'user_id' => '2',
            'booking_wallet' => 0,
            'is_approved' => 1,
        ]);



        // User::create([
        //     'first_name'=> 'zabir',
        //     'last_name'=> 'raihan',
        //     'username'=> 'zabirraihan',
        //     'email'=> 'zabir@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '3',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);

        // User::create([
        //     'first_name'=> 'emu',
        //     'last_name'=> '1',
        //     'username'=> 'emu',
        //     'email'=> 'emu@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '4',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);

        // User::create([
        //     'first_name'=> 'raihan',
        //     'last_name'=> 'emu',
        //     'username'=> 'raihan-doe',
        //     'email'=> 'raihan@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '5',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);

        // User::create([
        //     'first_name'=> 'etu',
        //     'last_name'=> 'emu',
        //     'username'=> 'etuemu',
        //     'email'=> 'etu@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '6',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'rakib',
        //     'last_name'=> 'raihan',
        //     'username'=> 'rakibraihan',
        //     'email'=> 'rakib@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '7',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);


        // User::create([
        //     'first_name'=> 'shawkat',
        //     'last_name'=> 'hossain',
        //     'username'=> 'shawkat',
        //     'email'=> 'shawkat@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '8',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'fahmid',
        //     'last_name'=> 'mz',
        //     'username'=> 'fahmid',
        //     'email'=> 'fahmid@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '9',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'fahim',
        //     'last_name'=> 'mz',
        //     'username'=> 'fahim',
        //     'email'=> 'fahim@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '10',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'fahim',
        //     'last_name'=> 'emu',
        //     'username'=> 'fahimemu',
        //     'email'=> 'fahimemu@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '11',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',


        // ]);

        // User::create([
        //     'first_name'=> 'raihan',
        //     'last_name'=> 'emu',
        //     'username'=> 'raihan-emu-1',
        //     'email'=> 'raihan2@gmail.com',
        //     'sponsor'=> 'jhon-doe',
        //     'password'=> Hash::make('password'),
        //     'is_users'=> 1,
        // ]);

        // SendMoney::create([
        //     'user_id'=> '12',
        //     'user_number'=> '01833086035',
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //      'type'=> 'Nogod',

        // ]);

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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
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
        //     'send_amount'=> '1400',
        //     'tranx_id'=> '123456789',
        //     'type'=> 'Nogod',

        // ]);

    }
}
