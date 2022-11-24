<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'description',
        'image',
        'price',
        'button_text',
        'button_link',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(RestaurantImage::class, 'restaurant_id', 'id');
    }
}
