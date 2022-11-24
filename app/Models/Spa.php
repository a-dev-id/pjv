<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spa extends Model
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
        'status',
    ];

    public function images()
    {
        return $this->hasMany(SpaImage::class, 'spa_id', 'id');
    }
}
