<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        "patient_id",
        "service",
        "department",
        "description",
     
       
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
