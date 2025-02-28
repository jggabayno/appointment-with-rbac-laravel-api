<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{

   use SoftDeletes, HasFactory;

    protected $fillable = [
        'start_time', 'finish_time', 'comments', 'client_id', 'employee_id'
    ];

    public function clients()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

}
