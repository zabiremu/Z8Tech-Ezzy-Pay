<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DailyBonusTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'daily_run_begin',
        'current_time',
        'daily_run_end',
        'status',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
