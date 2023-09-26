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


        User::create([
            'first_name'=> 'test',
            'last_name'=> '11',
            'username'=> 'test11',
            'email'=> 'tear11@gmail.com',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '12',
            'username'=> 'test12',
            'email'=> 'test12@gmail.com',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '13',
            'username'=> 'test13',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '14',
            'username'=> 'test14',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '15',
            'username'=> 'test15',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '16',
            'username'=> 'test16',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '17',
            'username'=> 'test17',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '18',
            'username'=> 'test18',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '19',
            'username'=> 'test19',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '20',
            'username'=> 'test20',
            'sponsor'=> 'user1',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor user2
        User::create([
            'first_name'=> 'test',
            'last_name'=> '21',
            'username'=> 'test21',
            'email'=> 'tear21@gmail.com',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '22',
            'username'=> 'test22',
            'email'=> 'test12@gmail.com',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '23',
            'username'=> 'test23',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '24',
            'username'=> 'test24',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '25',
            'username'=> 'test25',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '26',
            'username'=> 'test26',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '27',
            'username'=> 'test27',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '28',
            'username'=> 'test28',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '29',
            'username'=> 'test29',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '30',
            'username'=> 'test30',
            'sponsor'=> 'user2',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor user3
        User::create([
            'first_name'=> 'test',
            'last_name'=> '31',
            'username'=> 'test31',
            'email'=> 'tear31@gmail.com',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '32',
            'username'=> 'test32',
            'email'=> 'test32@gmail.com',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '33',
            'username'=> 'test33',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '34',
            'username'=> 'test34',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '35',
            'username'=> 'test35',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '36',
            'username'=> 'test36',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '37',
            'username'=> 'test37',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '38',
            'username'=> 'test38',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '39',
            'username'=> 'test39',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '40',
            'username'=> 'test40',
            'sponsor'=> 'user3',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor user4
        User::create([
            'first_name'=> 'test',
            'last_name'=> '41',
            'username'=> 'test41',
            'email'=> 'tear41@gmail.com',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '42',
            'username'=> 'test42',
            'email'=> 'test42@gmail.com',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '43',
            'username'=> 'test43',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '44',
            'username'=> 'test44',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '45',
            'username'=> 'test45',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '46',
            'username'=> 'test46',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '47',
            'username'=> 'test47',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '48',
            'username'=> 'test48',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '49',
            'username'=> 'test49',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '50',
            'username'=> 'test50',
            'sponsor'=> 'user4',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);


        // sponsor test11
        User::create([
            'first_name'=> 'test',
            'last_name'=> '51',
            'username'=> 'test51',
            'email'=> 'tear51@gmail.com',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '52',
            'username'=> 'test52',
            'email'=> 'test52@gmail.com',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '53',
            'username'=> 'test53',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '54',
            'username'=> 'test54',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '55',
            'username'=> 'test55',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '56',
            'username'=> 'test56',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '57',
            'username'=> 'test57',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '58',
            'username'=> 'test58',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '59',
            'username'=> 'test59',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '60',
            'username'=> 'test60',
            'sponsor'=> 'test11',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor test21
        User::create([
            'first_name'=> 'test',
            'last_name'=> '61',
            'username'=> 'test61',
            'email'=> 'tear61@gmail.com',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '62',
            'username'=> 'test62',
            'email'=> 'test62@gmail.com',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '63',
            'username'=> 'test63',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '64',
            'username'=> 'test64',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '65',
            'username'=> 'test65',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '66',
            'username'=> 'test66',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '67',
            'username'=> 'test67',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '68',
            'username'=> 'test68',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '69',
            'username'=> 'test69',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '70',
            'username'=> 'test70',
            'sponsor'=> 'test21',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor test31
        User::create([
            'first_name'=> 'test',
            'last_name'=> '71',
            'username'=> 'test71',
            'email'=> 'tear71@gmail.com',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '72',
            'username'=> 'test72',
            'email'=> 'test72@gmail.com',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '73',
            'username'=> 'test73',
            'email'=> 'test13@gmail.com',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '74',
            'username'=> 'test74',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '75',
            'username'=> 'test75',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '76',
            'username'=> 'test76',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '77',
            'username'=> 'test77',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '78',
            'username'=> 'test78',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '79',
            'username'=> 'test79',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '80',
            'username'=> 'test80',
            'sponsor'=> 'test31',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor test41
        User::create([
            'first_name'=> 'test',
            'last_name'=> '81',
            'username'=> 'test81',
            'email'=> 'tear81@gmail.com',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '82',
            'username'=> 'test82',
            'email'=> 'test82@gmail.com',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '83',
            'username'=> 'test83',
            'email'=> 'test83@gmail.com',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '84',
            'username'=> 'test84',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '85',
            'username'=> 'test85',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '86',
            'username'=> 'test86',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '87',
            'username'=> 'test87',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '88',
            'username'=> 'test88',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '89',
            'username'=> 'test89',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '90',
            'username'=> 'test90',
            'sponsor'=> 'test41',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        // sponsor test51
        User::create([
            'first_name'=> 'test',
            'last_name'=> '91',
            'username'=> 'test91',
            'email'=> 'tear91@gmail.com',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '92',
            'username'=> 'test92',
            'email'=> 'test92@gmail.com',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '93',
            'username'=> 'test93',
            'email'=> 'test93@gmail.com',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
        User::create([
            'first_name'=> 'test',
            'last_name'=> '94',
            'username'=> 'test94',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '95',
            'username'=> 'test95',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '96',
            'username'=> 'test96',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '97',
            'username'=> 'test97',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '98',
            'username'=> 'test98',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '99',
            'username'=> 'test99',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);

        User::create([
            'first_name'=> 'test',
            'last_name'=> '100',
            'username'=> 'test100',
            'sponsor'=> 'test51',
            'password'=> Hash::make('password'),
            'is_users'=> 1,
        ]);
    }
}
