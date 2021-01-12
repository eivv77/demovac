<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    protected $table = "vacancies";

    protected $fillable = [
        'category_id',
        'vacancy_id',
        'job_description',
        'skills_required',
        'offered_salary',
        'experience',
        'gender',
        'industry',
        'qualification',
        'level',
        'email',
        'phone_number',
        'message',
        'path',
    ];
    
}
