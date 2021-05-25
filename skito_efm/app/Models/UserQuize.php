<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuize extends Model
{
    use HasFactory;
    protected $primaryKey="id_user_quize";
    protected $fillable  = ['id_quize','id_user','is_enrolled'];
}
