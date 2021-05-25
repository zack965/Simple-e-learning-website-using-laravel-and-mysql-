<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teatcher extends Model
{
    use HasFactory;
    protected $fillable =['id_teatcher','age_teatcher','teatcher_years_experiance'];
}
