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
            'project_date_begin' => Carbon::createFromFormat('Y-m-d H:s:i', '2023-5-6 3:30:34'),
            'project_date_end' => Carbon::createFromFormat('Y-m-d H:s:i', '2026-5-6 3:30:34')
        ]);
    }
}
