<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        "gender",
        "first_name",
        "last_name",
        "street_address",
        "city",
        "parish",
        "home_number",
        "mobile_number",
        "work_number",
        "dob",
        "pob",
        "birth_parish",
        "emergency_title",
        "emergency_first_name",
        "emergency_last_name",
        "emergency_street_address",
        "emergency_city",
        "emergency_parish",
        "emergency_home_number",
        "emergency_mobile_number",
        "emergency_work_number",
    ];

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
