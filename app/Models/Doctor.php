<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'mobile',
        'dob',
        'communication_address',
        'com_city',
        'com_state',
        'consultation_address',
        'con_city',
        'con_state',
        'con_latitude',
        'con_longitude',
        'branch',
        'spec',
        'photo',
        'ceritificate',
        'designation',
        'status',
    ];
}
