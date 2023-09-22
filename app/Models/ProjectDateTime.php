<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProjectDateTime extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $fillable = [
        'user_id',
        'project_date_begin',
        'current_date_time',
        'project_date_end',
        'status',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
