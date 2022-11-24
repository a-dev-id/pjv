<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'spa_id',
        'title',
        'image',
        'status',
    ];

    public function spa()
    {
        return $this->belongsTo(Spa::class, 'spa_id', 'id');
    }
}
