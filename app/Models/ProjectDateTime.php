<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDateTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_date_begin',
        'project_date_end',
    ];
}
