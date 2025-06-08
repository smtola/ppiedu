<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassFaculty extends Model
{
    protected $fillable = ['name', 'slug', 'capacity'];

    public function faculties(): BelongsToMany
    {
        return $this->belongsToMany(Faculty::class, 'class_faculty_faculty');
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class, 'class', 'id');
    }
}
