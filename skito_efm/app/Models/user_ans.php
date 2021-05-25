<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_ans extends Model
{
    use HasFactory;
    protected $primaryKey = "answer_id";
    protected $fillable =[
        'user_id',
        'answer_question',
        'answer_question_id',
        'is_state'
    ];
}
