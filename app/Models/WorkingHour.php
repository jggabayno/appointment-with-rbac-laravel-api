<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class WorkingHour extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'employee_id', 'date', 'start_time', 'finish_time'
    ];

    public function employee()
    {
        return $this->belongsTo(User::class);
    }

}
