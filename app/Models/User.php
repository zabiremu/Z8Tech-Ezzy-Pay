<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\DailyBonusTime;
use App\Models\CEO;
use App\Models\SendMoney;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function sendMoney()
    {
        return $this->hasMany(SendMoney::class,'user_id');
    }

    public function InitialStepForRank()
    {
        return $this->hasMany(InitialStepForRank::class,'master_id');
    }
    public function InitialStepForEzzyLeader()
    {
        return $this->hasMany(InitialStepForEzzyLeader::class,'user_id');
    }
    public function InitialStepForEzzyManger()
    {
        return $this->hasMany(InitialStepForEzzyManger::class,'user_id');
    }
    public function InitailStepForEzzyExecutive()
    {
        return $this->hasMany(InitailStepForEzzyExecutive::class,'user_id');
    }
    public function IntialEzzyDirectory()
    {
        return $this->hasMany(IntialEzzyDirectory::class,'user_id');
    }
    public function IntialCOE()
    {
        return $this->hasMany(COE::class,'user_id');
    }
    public function IntialCEO()
    {
        return $this->hasMany(IntialCEO::class,'user_id');
    }

    public function EzzyMember()
    {
        return $this->hasMany(EzzyMember::class,'user_id');
    }
    public function EzzyLeader()
    {
        return $this->hasMany(EzzyLeader::class,'user_id');
    }
    public function EzzyManager()
    {
        return $this->hasMany(EzzyMember::class,'user_id');
    }
    public function EzzyExecutive()
    {
        return $this->hasMany(EzzyExecutive::class,'user_id');
    }
    public function EzzyDirectory()
    {
        return $this->hasMany(EzzyDirectory::class,'user_id');
    }
    public function CEO()
    {
        return $this->hasMany(CEO::class,'user_id');
    }
    public function COE()
    {
        return $this->hasMany(COE::class,'user_id');
    }

    public function project_date_times(){
        return $this->hasOne(ProjectDateTime::class);
    }

    public function daily_bonus_times(){
        return $this->hasMany(DailyBonusTime::class);
    }
}
