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
        $now = Carbon::now();
        $yesterday = $now->yesterday();
        DailyBonusTime::create([
            'daily_run_begin'=> $now,
            'daily_run_end'=> $yesterday,
        ]);
    }
}
