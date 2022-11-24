<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider2 extends Model
{
    use HasFactory;

    protected $table = 'home_slider2s';
    protected $fillable = [
        'page_id',
        'title',
        'image',
        'status',
    ];
}
