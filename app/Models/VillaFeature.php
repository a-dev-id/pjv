<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillaFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'villa_id',
        'feature_id',
        'status',
    ];

    public function villa()
    {
        return $this->belongsTo(Villa::class, 'villa_id', 'id');
    }

    public function feature()
    {
        return $this->hasOne(Feature::class, 'feature_id', 'id');
    }
}
