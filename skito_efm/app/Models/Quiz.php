<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $primaryKey = "quiz_id";
    protected $fillable = ['quiz_title','quiz_technology','quiz_teatcher'];
}
