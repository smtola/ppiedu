<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LibraryCategory extends Model
{
    protected $fillable = ['name', 'slug'];

    public function departments(): HasMany
    {
        return $this->hasMany(LibraryDepartment::class);
    }
} 