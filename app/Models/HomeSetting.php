<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'description',
        'image',
        'title1',
        'excerpt1',
        'title2',
        'excerpt2',
        'image1',
        'image2',
        'image3',
        'title3',
        'excerpt3',
        'status',
    ];
}
