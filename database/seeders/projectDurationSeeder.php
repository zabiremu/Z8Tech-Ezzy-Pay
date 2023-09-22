<?php

namespace Database\Seeders;

use App\Models\ProjectDateTime;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectDurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectDateTime::create([
            'user_id'=> 2,
            'project_date_begin' => Carbon::now(),
            'current_date_time' => Carbon::now(),
            'project_date_end' => Carbon::now()->addYears(1),
            'status' => 1,
        ]);
    }
}
