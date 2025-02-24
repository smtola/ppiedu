<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable = [
        'id',
        'banner_title',
        'banner_image'
    ];
    public $timestamps = false;
}
