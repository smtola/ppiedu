<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassFF extends Model
{
    protected $table = 'class_faculty_faculty';
    protected $fillable = ['class_faculty_id', 'faculty_id'];
}
