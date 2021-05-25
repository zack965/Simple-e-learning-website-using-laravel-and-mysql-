<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = "question_id";

    protected $fillable =[
        'question_text',
        'question_right_ans',
        'question_wrong_ans_one',
        'question_wrong_ans_two',
        'question_quiz',
    ];


}
