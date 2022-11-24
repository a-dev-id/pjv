<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'description',
        'price',
        'pax',
        'button_text',
        'button_link',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(ExperienceImage::class, 'experience_id', 'id');
    }
}
