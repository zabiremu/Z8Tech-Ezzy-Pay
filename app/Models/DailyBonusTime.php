<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyBonusTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'daily_run_begin',
        'daily_run_end',
    ];
}
