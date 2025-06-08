<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Banner extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
    $this->addMediaCollection('images')->singleFile();

    $this->addMediaConversion('thumb')
        ->width(150)
        ->height(150)
        ->sharpen(10)
        ->quality(90)
        ->nonQueued();

    $this->addMediaConversion('small')
        ->width(400)
        ->quality(90)
        ->nonQueued();

    $this->addMediaConversion('large')
        ->width(1080)
        ->height(1920)
        ->sharpen(10)
        ->quality(90)
        ->nonQueued();
    }

    protected $fillable = ['name','slug'];
}
