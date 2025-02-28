<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use SoftDeletes,HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        return trim($password === '') ? NULL : $this->attributes['password'] = Hash::make($password);
    }

    public function workingHours()
    {
        return $this->hasMany(WorkingHour::class, 'employee_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class,'employee_id')->orWhere('client_id');
    }
}
