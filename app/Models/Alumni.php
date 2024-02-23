<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'registration_key',
        'college_id',
        'course_Id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'educational_attainment',
        'major',
        'coursework',
        'year_graduated'
    ];
}
