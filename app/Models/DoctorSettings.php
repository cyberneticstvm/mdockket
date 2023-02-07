<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'fee',
        'slots',
        'time_per_appointment',
        'appointment_start_time',
        'appointment_end_time',
        'break_start_time',
        'break_end_time',
        'appointment_open_days',
        'available_for_appointment',
    ];
}
