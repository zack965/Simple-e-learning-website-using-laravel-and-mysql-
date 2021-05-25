<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_doc extends Model
{
    use HasFactory;
    protected $fillable =[
        'student_id',
        'student_age',
        'student_years_experiance'
    ];
}
