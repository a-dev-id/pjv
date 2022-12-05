<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'wedding_id',
        'title',
        'image',
        'status',
    ];

    public function wedding()
    {
        return $this->belongsTo(Restaurant::class, 'wedding_id', 'id');
    }
}
