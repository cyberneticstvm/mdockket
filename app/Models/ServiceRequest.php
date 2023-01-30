<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'mobile',
        'clinic_id',
        'service_id',
        'service_date',
        'notes',
        'status',
        'user_id',
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
