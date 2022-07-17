<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Alumni extends Model 
{ 
    use HasFactory;

    protected $fillable = [
        'name',
        'middleName',
        'surname',
        'phone',
        'email',
        'department',
        'sex',
        'matric_number',
        'country_of_origin',
        'state_of_origin',
        'lga_of_origin',
        'country_of_residence',
        'state_of_residence',
        'graduation_year',
        'day_month_of_birth',
        'contact_address',
        'degree',
        'occupation',
    ];
}
