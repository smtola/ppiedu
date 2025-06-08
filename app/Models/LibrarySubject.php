<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class LibrarySubject extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name', 
        'slug', 
        'library_department_id',
        'link',
        'attachment'
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(LibraryDepartment::class, 'library_department_id');
    }

    public function libraries(): HasMany
    {
        return $this->hasMany(Library::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(10)
            ->quality(90)
            ->nonQueued();
    }
} 