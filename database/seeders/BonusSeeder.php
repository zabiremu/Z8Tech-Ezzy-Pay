<?php

namespace Database\Seeders;

use App\Models\DailyBonusTime;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now()->format('Y:m:d H:i:s');
        $today = Carbon::today()->addDay()->format('Y:m:d H:i:s');
        DailyBonusTime::create([
            'user_id'=> 1,
            'daily_run_begin'=> $now,
            'current_time'=> $now,
            'daily_run_end'=> $today,
            'status'=> 0,
        ]);
    }
}
