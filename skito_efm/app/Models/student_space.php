<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_space extends Model
{
    use HasFactory;
    protected $table="skills";
    protected $primaryKey="id_skill ";
    protected $fillable =['id_user','level_id','profile_id','type_domaine_id','technology_name'];

}
