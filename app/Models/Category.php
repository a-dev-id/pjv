<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'category_id', 'id');
    }
}
