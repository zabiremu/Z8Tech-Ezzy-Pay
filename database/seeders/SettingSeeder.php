<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'marquee_notice'=> 'WELLCOME TO MFSPAY.',
            'withdraw_time_close'=> '24 hours',
            'withdraw_time_open'=> '23.59',
            'minimum_deposit'=> '50',
            'minimum_transaction'=> '1',
            'minimum_exchange'=> '1',
            'trc20'=> '1',
            'n_a'=>'3029255d18c261228d4aadd04fd18af8d12fe9496276ad636581d059fee9d8cf33cd95d9e6f938a42ae482f5b5eb14e886e3e4e5e508dfdc5c64d06ab2a23fcdrRuzZfKjFWM',
            'transaction_charge'=> '0',
            'decimal'=> '2',
            'withdraw_charge'=> '100',
            'maximum_withdraw'=> '500',
            'minimum_withdraw'=> '50',
            'ezzy_member'=> '500',
            'ezzy_leader'=> '2000',
            'manager'=> '10000',
            'executive'=> '35000',
            'director'=> '700000',
            'COE'=> '150000',
            'CEO'=> '300000',
            'registration'=> '1825',
            'nogodPhoneNumber'=> '01923813381',
        ]);
    }
}
