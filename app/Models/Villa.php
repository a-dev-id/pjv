<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'description',
        'banner_image',
        'meta_title',
        'meta_description',
        'button_text',
        'button_link',
        'status',
    ];

    public function villa_features()
    {
        return $this->hasMany(VillaFeature::class, 'villa_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(VillaImage::class, 'villa_id', 'id');
    }
}
