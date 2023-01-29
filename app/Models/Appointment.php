<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'mobile',
        'branch',
        'spec',
        'doctor_id',
        'appointment_date',
        'appointment_time',
        'slot',
        'token',
        'user_id',
        'created_by',
    ];
}
