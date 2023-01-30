<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mobile',
        'address',
        'city',
        'state',
        'latitude',
        'longitude',
        'status',
        'photo',
    ];

    public function requests(){
        return $this->hasMany(ServiceRequest::class);
    }
}
