<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;
    protected $fillable = ['resource_name','resources_desc','resources_file_name','video_id'];
    protected $primaryKey="resources_id";
}
