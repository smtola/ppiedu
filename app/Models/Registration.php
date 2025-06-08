<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'faculty',
        'class',
        'status',
        'notes'
    ];

    public function classFaculty(): BelongsTo
    {
        return $this->belongsTo(ClassFaculty::class, 'class', 'id');
    }
} 