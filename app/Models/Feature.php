<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'status',
    ];

    public function villa_feature()
    {
        return $this->belongsTo(VillaFeature::class, 'feature_id', 'id');
    }

}
