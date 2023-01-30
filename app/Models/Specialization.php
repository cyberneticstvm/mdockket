<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch',
        'name',
        'category',
    ];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
