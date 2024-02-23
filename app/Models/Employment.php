<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumni_id',
        'status',
        'position',
        'company_city',
        'company_country',
        'year_employed',
        'portfolio'
    ];
}
